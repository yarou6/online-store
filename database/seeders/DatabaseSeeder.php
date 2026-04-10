<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'role' => 'admin',
            'phone' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Cart::factory()->create([
            'user_id' => 1,
            'session_id' => null,
        ]);
    }
}
