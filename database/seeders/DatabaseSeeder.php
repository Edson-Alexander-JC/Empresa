<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\personal;
use App\Models\cargo;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        cargo::factory()->create([
            'nombre_cargo' => 'prueba',
        ]);
        personal::factory()->count(10)->create();
    }
}
