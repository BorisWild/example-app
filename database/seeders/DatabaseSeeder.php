<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@test.com',
             'password' => Hash::make('test@test.com'),
             'email_verified_at'=>now()
        ]);

        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@test.com',
            'password' => Hash::make('test2@test.com'),
            'email_verified_at'=>now()
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'email_verified_at'=>now()
        ]);
    }
}
