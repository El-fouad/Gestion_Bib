<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->text(20),
            "author" => $this->faker->name(6),
            "genre" => $this->faker->text(10),
            'stock' =>$this->faker->date(5),
            "description"=> $this->faker->text(150),
            "date"=> $this->faker->date()
        ];
    }
}
