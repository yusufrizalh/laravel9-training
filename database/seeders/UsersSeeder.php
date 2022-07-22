<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        collect([
            [
                'name' => 'Yusuf Rizal',
                'email' => 'rizal@inixindo.co.id',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(12),
            ],
            [
                'name' => 'Meliana Renata',
                'email' => 'meliana.renata@email',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(12),
            ],
            [
                'name' => 'Jennifer Paula',
                'email' => 'jennifer_paula@example',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(12),
            ]
        ])->each(function ($user) {
            User::create($user);
        });
    }
}


