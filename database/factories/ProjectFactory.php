<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

Use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->unique->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => $this->faker->randomElement([1,2,3]),
            'client_id' => Client::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
