<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
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
            'content' => $this->faker->text,
            'customer' => $this->faker->name,
            'collection_id' => $collection->id
        ];
    }
}
