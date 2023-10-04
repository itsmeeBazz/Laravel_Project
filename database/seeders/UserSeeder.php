<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name'=>'admin',
        'email'=>'abas@gmail.com',
        'password'=>bcrypt('rahasia')
    ]);
        User::create([
        'name'=>'staff',
        'email'=>'staff@gmail.com',
        'password'=>bcrypt('rahasia')
    ]);
    }
}
