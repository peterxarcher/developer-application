<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assets>
 */
class AssetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
            'type' => $this->faker->word(),
            'manufactured_by' => $this->faker->company(),
            'model' => $this->faker->numberBetween(1,100),
            'serial_no' => $this->faker->numberBetween(10000,100000),
            'address' =>  $this->faker->address(),
            'purchase_date' =>  $this->faker->date(),
            'last_maintenance_date' =>  $this->faker->date(),
            'condition' =>  Arr::random(['Good', 'Ok', 'Off']),
            'organization_id' => $this->faker->numberBetween(1, \App\Models\Organization::count()),
            'assigned_to' => $this->faker->numberBetween(1, \App\Models\Employee::count()),
        ];
    }
}
