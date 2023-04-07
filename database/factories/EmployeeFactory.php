<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Support\Str;
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
    protected $model = Employee::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'department' => $this->faker->sentence(2),
            'salary' => $this->faker->numberBetween(2000,50000),
            'phone_number' => $this->faker->phoneNumber(),
            'dob' =>  $this->faker->dateTime(),
            'address' =>  $this->faker->address()
        ];
    }
}
