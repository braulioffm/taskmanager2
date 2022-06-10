<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'description' => $this->faker->text(20),
            'status' => $this->faker->randomElement([1,2,3]),
            'project_id' => Project::all()->random()->id
        ];
    
    }
}
