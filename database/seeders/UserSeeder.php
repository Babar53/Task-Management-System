<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123123'), // Securely hash the password
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
