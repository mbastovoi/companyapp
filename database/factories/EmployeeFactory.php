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
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name'=>$this-> faker->lastName(),
            'company_id' => $this ->faker ->numberBetween($min = 1, $max = 10),
            'email'=> $this -> faker -> email(),
            'phone' => $this -> faker -> phoneNumber()
        ];
    }
}
