<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<100;$i++){
            Employee::create([
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'email' => fake()->unique()->email,
                'address' => fake()->address,
            ]);
        }
    }
}
