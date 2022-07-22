<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $users = collect([
            [
                'name' => 'Yusuf Rizal',
                'email' => 'rizal@inixindo.co.id',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(12),
            ],
            [
                'name' => 'Meliana Renata',
                'email' => 'meliana.renata@email',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(12),
            ],
            [
                'name' => 'Jennifer Paula',
                'email' => 'jennifer_paula@example',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(12),
            ]
        ])->each(function ($user) {
            User::create($user);
        });

        Employee::factory(10)->create();
    }
}
