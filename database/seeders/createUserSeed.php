<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $username = $this->command->ask('Enter username');
        $password = $this->command->secret('Enter password');

        \App\Models\User::create([
            'name' => $username,
            'username' => $username,
            'password' => bcrypt($password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->command->info('User created successfully!');
    }
}
