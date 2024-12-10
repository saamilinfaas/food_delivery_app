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
            'name' => 'saamilinfaas',
            'email' => 'saamilinfaas@yahoo.com',
            'password'=>'1122',
            'is_admin'=>true,
        ]);
    }
}
