<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'user@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('abcd1234!'),
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
