<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Como el seeder de Posts solo tiene la ejecución del factory,
        //no haría falta crear el seeder, podemos introducirlo directamente aquí
        Post::factory(100)->create();

        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        // ]);

        $this->call(UserSeeder::class);

    }
}
