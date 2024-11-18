<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class JobFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'title'         =>  fake()->jobTitle(),
			'employer_id'   =>  \App\Models\Employer::factory(),
			'salary'        =>  '₹' . fake()->numberBetween(40, 100) . '0,000/Year',
		];
	}
}
