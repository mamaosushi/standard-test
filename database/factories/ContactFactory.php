<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

     public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->faker->randomNumber(),
            'address' => $this->faker->text(255),
            'building_name' => $this->faker->text(255),
            'opinion' => $this->faker->text()
        ];
    }
}
