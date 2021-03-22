<?php

namespace Tests\Http\Requests\Api;

use App\Http\Requests\Api\AddReviewRequest;
use App\Models\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\Feature\Api\Validation\ValidationTestCase;
use Illuminate\Support\Facades\Validator;

class AddReviewRequestTest extends ValidationTestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @param array $arr
     * @param array $without
     * @return array
     */
    public function getData(array $arr = [], array $without = []): array
    {
        $collection = Collection::factory()->create();

        /** @var Collection $collection */
        $data = [
            'customer' => $this->faker->firstName,
            'content' => $this->faker->realText(4096),
            'collection_id' => $collection->id,
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

        $validator = Validator::make($data, (new AddReviewRequest())->rules());

        $this->assertFalse($validator->fails());
    }

    /** @test */
    public function validation_fails_if_customer_is_missing()
    {
        $data = $this->getData([], ['customer']);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_customer_is_not_string()
    {
        $data = $this->getData([
            'customer' => $this->faker->numberBetween(1,128)
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_customer_is_exceeds_max_length()
    {
        $data = $this->getData([
            'customer' => Str::random(129)
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_missing()
    {
        $data = $this->getData([], ['content']);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_content_is_exceeds_max_length()
    {
        $data = $this->getData([
            'content' => Str::random(4097)
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_collection_id_is_missing()
    {
        $data = $this->getData([], ['collection_id']);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_collection_id_is_not_integer()
    {
        $data = $this->getData([
            'collection_id' => $this->faker->word
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }

    /** @test */
    public function validation_fails_if_collection_id_is_not_exist_in_database()
    {
        $data = $this->getData([
            'collection_id' => 99
        ]);

        $this->expectValidationException($data, AddReviewRequest::class);
    }
}
