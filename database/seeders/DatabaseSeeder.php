<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin@2025'), // It's a good practice to hash passwords
            'two_factor_secret'=> null,
            'two_factor_recovery_codes'=> null,
            'two_factor_confirmed_at'=> null,
        ]);
    }
}
