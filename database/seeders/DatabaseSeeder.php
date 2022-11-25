<?php

namespace Database\Seeders;

use App\Models\Messages;
use App\Models\Categories;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Users::factory(3)->create();

        Messages::factory(20)->create();

        Categories::create([
            'name' => 'Usulan',
            'slug' => 'usulan',
            ]);

            Categories::create([
            'name' => 'Pengumuman',
            'slug' => 'pengumuman',
             ]);


             Categories::create([
                'name' => 'Keluhan',
                'slug' => 'keluhan',
                 ]);
        // \App\Models\User::factory(10)->create();
    }
}
