<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'legions',
            'email' => 'canvaterbaru10@gmail.com',
            'role' =>  UserRole::Admmin,  //Mendeklarasikan bahwa isi user ini punya role admin
            'password' => Hash::make('LuminousJaya')
        ]);
    }
}
