<?php

namespace Database\Factories;
use App\Models\Organization;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Organization::class;
    public function definition(): array
    {
        return [
            'organization_type' => $this->faker->word(),
            'description' => $this->faker->sentence(50),
            'name' => $this->faker->unique()->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'mobile_no' => $this->faker->phoneNumber(),
            'address' =>  $this->faker->address()
        ];
    }
}
