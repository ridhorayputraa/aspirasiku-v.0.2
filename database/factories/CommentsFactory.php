<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'body' => $this->faker->sentence(mt_rand(2,8)),
             'messages_id' => mt_rand(1,20),
             'users_id' => mt_rand(1,3)
        ];
    }
}
