<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_id' => Store::all()->random()->id, 
            'name' => $this->faker->catchPhrase(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText(),
            'published' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'price' => $this->faker->numberBetween(10, 99999),
            'stock_count' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
