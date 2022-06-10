<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Braulio Fausto',
            'email' => 'braulioffm@gmail.com',
            'password' => bcrypt(123456789)
        ]);

        User::create([
            'name' => 'Agustín Preciado',
            'email' => 'agus@midepartamentocreativo.com',
            'password' => bcrypt(123456789)
        ]);
        User::create([
            'name' => 'Daniel Jimenez',
            'email' => 'dani@midepartamentocreativo.com',
            'password' => bcrypt(123456789)
        ]);
        User::create([
            'name' => 'Enrique Ramirez',
            'email' => 'enrique@midepartamentocreativo.com',
            'password' => bcrypt(123456789)
        ]);
        
    }
}
