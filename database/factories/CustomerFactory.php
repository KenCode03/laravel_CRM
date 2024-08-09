<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tel = str_replace('-','',$this->faker->phoneNumber);
        $address = mb_substr($this->faker->address,9);
        return [
            'name' => $this->faker->name,
            'kana' => $this->faker->kanaName,
            //変数に置き換えます
            'tel' => $tel,
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            //変数に置き換えます
            'address' => $address,
            'birthday' => $this->faker->dateTime,
            'gender' => $this->faker->numberBetween(0, 2),
            'memo' => $this->faker->realText(50),
        ];
    }
}
