<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class CreateFirstUser extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
             'name' => 'Admin',
             'email' => 'admin@elando.com',
             'email_verified_at' => now(),
             'password' => static::$password ??= Hash::make('password123'),
             'remember_token' => Str::random(10),
         ]);
    }
}
