<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city_array = ['irkutsk', 'kostroma', ''];
        return [
            'image' => 'test.jpg',
            'title' => $this->faker->word(),
            'excerpt' => $this->faker->paragraph(),
            'full_text' => $this->faker->text(),
            'is_favorite' => rand(0, 1),
            'city' => $city_array[rand(0, 2)]
        ];
    }
}
