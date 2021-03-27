<?php

namespace Database\Factories;

use App\Models\TransactionInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class TransactionInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TransactionInfo::class;

    public function definition()
    {
    return [
        'nationalId' => $this->faker->randomNumber(),
        'firstName' => $this->faker->firstName,
        'lastName' => $this->faker->lastName,
        'phoneNumber' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'birthDate' => $this->faker->date(),


    ];
}
};
