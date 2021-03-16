<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $collection = Collection::count() ? Collection::inRandomOrder()->first() : Collection::factory()->create();

        return [
            'code' => $this->faker->unique()->numerify('#####-##'),
            'collection_id' => $collection->id
        ];
    }
}
