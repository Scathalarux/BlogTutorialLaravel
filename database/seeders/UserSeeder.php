<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = new User();
    

        $user->name = 'LaraCV';
        $user->email = 'laracv@mail.com';
        $user->password = bcrypt('abc123.');

        $user->save();

        // $user = new User();

        // $user->name = 'Lara2';
        // $user->email = 'lara2@mail.com';
        // $user->password = bcrypt('abc123.');

        // $user->save();

        User::factory(10)->create();
    }
}
