<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Admin User
User::updateOrCreate(
    ['email' => 'admin@example.com'], // check by email
    [
        'name' => 'Admin User',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]
);

User::updateOrCreate(
    ['email' => 'user@example.com'],
    [
        'name' => 'Normal User',
        'password' => Hash::make('password'),
        'role' => 'user',
    ]
);
}
}
