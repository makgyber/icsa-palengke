<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id' => User::all()->random()->id, 
            'name' => $this->faker->company(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->catchPhrase(),
            'published' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
