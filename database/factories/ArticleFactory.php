<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $this->faker->imageUrl(640, 480),
            'content' => $this->faker->paragraph(5),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
