<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Fatih Daffa N S',
            'username' => 'fatihdaffans',
            'email' => 'fatihdaffa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pasword'),
            'remember_token' => Str::random(10)
        ]);
    }
}
