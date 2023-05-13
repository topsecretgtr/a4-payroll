<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'slug' => $this->faker->slug(),
            'gender' => $gender,
            'age' => mt_rand(20,50),
            'address' => $this->faker->address(),
            'position' => $this->faker->word(),
            'department_id' => mt_rand(1,3)
        ];
    }
}
