<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{

    public $model = Work::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer' => fake()->name,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'job_description' => fake()->text,
            'key_achievements' =>fake()->text,
            'profile_id' => 1
        ];
    }
}
