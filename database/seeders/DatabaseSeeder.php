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
            'role_id'=>2,   //2->customer
            'is_system_admin'=>0,   //=->not system admin
            'name' => 'Test User',
            'email' => 'test@mail.com',
        ]);
    }
}
