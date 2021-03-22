<?php

namespace Tests\Http\Requests;

use App\Enums\Purchase;
use App\Enums\Whence;
use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\Feature\Api\Validation\ValidationTestCase;
use Illuminate\Support\Facades\Validator;

class StoreApplicationRequestTest extends ValidationTestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @param array $arr
     * @param array $without
     * @return array
     */
    public function getData(array $arr = [], array $without = []): array
    {
        $purchase = $this->faker->randomElement(Purchase::ALL);
        $whence = $this->faker->randomElement(Whence::ALL);

        if ($whence === 'inne')
            $whenceOther = $this->faker->word;
        else
            $whenceOther = null;

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'phone' => '+48' . $this->faker->numerify('#########'),
            'street' => $this->faker->streetAddress,
            'flat' => $this->faker->numerify('##'),
            'zip' => $this->faker->postcode,
            'city' => $this->faker->city,
            'purchase' => $purchase,
            'whence' => $whence,
            'whence_other' => $whenceOther,
            'img_receipt' => $this->createTestFile('receipt.jpg', 1024),
            'img_ean' => $this->createTestFile('ean.jpg', 1024),
            'img_box' => $this->createTestFile('box.jpg', 1024),
            'legal_1' => true,
            'legal_2' => true,
            'legal_3' => true,
            'legal_4' => $this->faker->boolean,
        ];

        foreach ($without as $item) {
            if (array_key_exists($item, $data)) {
                unset($data[$item]);
            }
        }

        return array_merge($data, $arr);
    }

    /** @test */
    public function validation_pass_for_valid_data()
    {
        $data = $this->getData();

        $validator = Validator::make($data, (new StoreApplicationRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_name_is_not_exists()
    {
        $data = $this->getData([], ['name']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_name_is_not_a_string()
    {
        $data = $this->getData([
            'name' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_name_is_less_that_min_length()
    {
        $data = $this->getData([
            'name' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_name_is_exceeds_max_length()
    {
        $data = $this->getData([
            'name' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_exists()
    {
        $data = $this->getData([], ['email']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_rfc()
    {
        $data = $this->getData([
            'email' => Str::random(),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_email_is_not_unique()
    {
        $application = Application::factory()->create();

        /** @var Application $application */
        $data = $this->getData([
            'email' => $application->email,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_phone_is_not_exists()
    {
        $data = $this->getData([], ['phone']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_phone_is_not_regexp()
    {
        $data = $this->getData([
            'phone' => $this->faker->numerify('+48########'),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_street_is_not_exists()
    {
        $data = $this->getData([], ['street']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_street_is_not_a_string()
    {
        $data = $this->getData([
            'street' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_street_is_less_that_min_length()
    {
        $data = $this->getData([
            'street' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_street_is_exceeds_max_length()
    {
        $data = $this->getData([
            'street' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_flat_is_not_exists()
    {
        $data = $this->getData([], ['flat']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_flat_is_exceeds_max_length()
    {
        $data = $this->getData([
            'flat' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_zip_is_not_exists()
    {
        $data = $this->getData([], ['zip']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_zip_is_not_regex()
    {
        $data = $this->getData([
            'zip' => $this->faker->numerify('#####'),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_not_exists()
    {
        $data = $this->getData([], ['city']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_not_a_string()
    {
        $data = $this->getData([
            'city' => $this->faker->numberBetween(1, 100)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_less_that_min_length()
    {
        $data = $this->getData([
            'city' => Str::random(2)
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_city_is_exceeds_max_length()
    {
        $data = $this->getData([
            'city' => Str::random(129),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_purchase_is_not_exists()
    {
        $data = $this->getData([], ['purchase']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_purchase_is_not_in()
    {
        $data = $this->getData([
            'purchase' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_whence_is_not_exists()
    {
        $data = $this->getData([], ['whence']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_whence_is_not_in()
    {
        $data = $this->getData([
            'whence' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_exists()
    {
        $data = $this->getData([], ['img_receipt']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_file()
    {
        $data = $this->getData([
            'img_receipt' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_not_file_image()
    {
        $data = $this->getData([
            'img_receipt' => $this->createTestFile('test.pdf', 1024),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_receipt_is_too_large()
    {
        $data = $this->getData([
            'img_receipt' => $this->createTestFile('test.jpg', 5000),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_ean_is_not_exists()
    {
        $data = $this->getData([], ['img_ean']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_ean_is_not_file()
    {
        $data = $this->getData([
            'img_ean' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_ean_is_not_file_image()
    {
        $data = $this->getData([
            'img_ean' => $this->createTestFile('test.pdf', 1024),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_ean_is_too_large()
    {
        $data = $this->getData([
            'img_ean' => $this->createTestFile('test.jpg', 5000),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_box_is_not_exists()
    {
        $data = $this->getData([], ['img_box']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_box_is_not_file()
    {
        $data = $this->getData([
            'img_box' => $this->faker->word,
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_box_is_not_file_image()
    {
        $data = $this->getData([
            'img_box' => $this->createTestFile('test.pdf', 1024),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_img_box_is_too_large()
    {
        $data = $this->getData([
            'img_box' => $this->createTestFile('test.jpg', 5000),
        ]);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_1_is_not_exist()
    {
        $data = $this->getData([], ['legal_1']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_2_is_not_exist()
    {
        $data = $this->getData([], ['legal_2']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_legal_3_is_not_exist()
    {
        $data = $this->getData([], ['legal_3']);

        $this->expectValidationException($data, StoreApplicationRequest::class);
    }
}
