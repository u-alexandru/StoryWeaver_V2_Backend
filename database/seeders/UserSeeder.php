<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'birth_date' => '1995-08-12',
                'email_verified_at' => now(),
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
