<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Contact::class;


    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->unique()->safeEmail,
            'tell1' => $this->faker->numerify('####'),
            'tell2' => $this->faker->numerify('####'),
            'tell3' => $this->faker->numerify('####'),
            'address' => $this->faker->address,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'detail' => $this->faker->text(120),
            'building' => $this->faker->optional()->secondaryAddress,
        ];
    }
}
