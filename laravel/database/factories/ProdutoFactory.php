<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();

        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomNumber(2),
            'id_category' =>Category::pluck('id')->random(),
            'slug' => Str::slug($name)
        ];
    }
}
