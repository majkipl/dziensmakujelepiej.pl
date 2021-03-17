<?php

namespace Database\Factories;

use App\Enums\Purchase;
use App\Enums\Whence;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $purchase = $this->faker->randomElement(Purchase::ALL);
        $whence = $this->faker->randomElement(Whence::ALL);

        if( $whence === 'inne' )
            $whenceOther = $this->faker->word;
        else
            $whenceOther = null;

        return [
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
            'img_receipt' => 'receipts/6FmXl9NyrYNbVyye9kBy8cjWsC9jvaBBQr8B8Le2.jpg',
            'img_ean' => 'eans/aZLbHviSo7b1BQ7i1JRhUszV9DL97PEhagbXj8ON.jpg',
            'img_box' => 'boxs/36nMJxrtbRePL1utEFH3NkG5drlM1UcFLgIV1Si1.jpg',
            'legal_4' => $this->faker->boolean,
        ];
    }
}
