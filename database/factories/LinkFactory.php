<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
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
            'url' => $this->faker->url,
            'collection_id' => $collection->id
        ];
    }
}
