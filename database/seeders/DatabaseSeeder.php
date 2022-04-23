<?php

namespace Database\Seeders;

use App\Models\Exercise;
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
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'user@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('abcd1234!'),
            'remember_token' => Str::random(10),
        ]);

        Exercise::create([
            'name' => 'Push-up',
            'created_by' => $user->id,
            'video_url' => '',
            'description' => 'Push your body up and down on the floor with your hands.',
        ]);

        Exercise::create([
            'name' => 'Deadlift',
            'created_by' => $user->id,
            'video_url' => '',
            'description' => 'Back straight, bend your knees, arms hanging, stand up while lifting the bar off the ground.',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
