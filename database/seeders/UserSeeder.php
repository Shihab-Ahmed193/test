<?php
 
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::create([
            'first_name' => "Super",
            'last_name' => "Admin",
            "image" => "default.png",
            'email' => "admin@admin.com",
            'password' => encrypt("123456"),
            'status' => "active",
        ]);
    }
}