<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $keyword = [];

        $rand = rand(5, 10);

        for ($i = 0 ; $i < $rand ; $i++) {

            $keyword[] = fake()->name();

        }

        return [
            "title" => fake()->title(),
            "descrtion" => fake()->text(500),
            "download" => fake()->boolean(),
            "view" => rand(0, 50),
            "keyword" => json_encode($keyword)
        ];
    }
}
