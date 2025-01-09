<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'joining_date' => $this->faker->date,
            'password' => $this->faker->password, // Default password
            'confirm_password'=>$this->faker->password,
            'mobile_number' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'designation' => $this->faker->jobTitle,
            'class' => $this->faker->randomElement(['PHYSICS', 'CHEMISTRY', 'BIOLOGY', 'MATHEMATICS', 'COMPUTER SCIENCE']),
            'dob' => $this->faker->date,
            'qualifications' => $this->faker->word . ' ' . $this->faker->word,
        ];
    }
}
