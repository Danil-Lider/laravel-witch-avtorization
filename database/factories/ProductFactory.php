<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;


    public function definition()
    {

        $name =  $this->faker->name();
        $slug = Str::slug($name, '-');
        $categoryIds = Category::all()->pluck('id')->toArray();

        return [
            'name' => $name,
            'slug' => $slug,
            'price' => $this->faker->numberBetween(30, 1430),
            'Category_id' => $this->faker->randomElement($categoryIds),
        ];

    }
}
