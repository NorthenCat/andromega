<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChangePassword extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo "Enter username to search: ";
        $username = trim(fgets(STDIN));
        
        $user = \App\Models\User::where('name', $username)->first();
        
        if ($user) {
            echo "User found. Enter new password: ";
            $password = trim(fgets(STDIN));
            
            $user->password = bcrypt($password);
            $user->save();
            
            echo "Password changed successfully!\n";
        } else {
            echo "User not found.\n";
        }
    }
}
