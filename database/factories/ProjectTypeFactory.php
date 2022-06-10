<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

Use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectType>
 */
class ProjectTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->unique->word(5,10);

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
