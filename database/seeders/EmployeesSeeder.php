<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        Employee::factory(100)->create();
    }
}
