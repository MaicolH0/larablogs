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
        $user = new User;
        $user->fullname = 'Maicol Hidalgo';
        $user->email = "maicole.hidalgoz@autonoma.edu.co";
        $user->password = "12345678";
        $user->save();

        for ($i=0; $i < 10; $i++) { 
            $user = new User;
            $user->fullname = "User $i";
            $user->email = "$i@autonoma.edu.co";
            $user->password = "12345678";
            $user->save();
        }
    }
}
