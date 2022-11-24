<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
                 //
                 'title' => $this->faker->sentence(mt_rand(2,8)),
                 'slug' => $this->faker->slug(),
                 'excerpt' => $this->faker->paragraph(),
                 // agar paragraps nyaa di bungkus Tag <p>
                 // Paragraps akan membuat sebuah array yang di dalamnya berapa pargraf
             //    implode adalah join
                 // 'body' =>'<p>'. implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))) .'</p>',

                 // kita bisa menggunakan Map
                 'body' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(function($p){
                     return "<p>$p</p>" ;
                 })->implode(''),
                 'categories_id' => mt_rand(1,3),
                 'user_id' => mt_rand(1,3)
        ];
    }
}
