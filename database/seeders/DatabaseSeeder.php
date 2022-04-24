<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\User;
use App\Models\Workout;
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

        Workout::create([
            'name' => 'Workout A',
            'created_by' => $user->id,
            'description' => 'Lorem ipsum dolor est...',
        ]);

        Workout::create([
            'name' => 'Workout B',
            'created_by' => $user->id,
            'description' => 'Lorem ipsum dolor est...',
        ]);

        \App\Models\User::factory(10)->create();

        Exercise::create([
            'name' => 'Squat',
            'created_by' => 2,
            'video_url' => '',
            'description' => 'Put the bar on your back, keep your back straight, squat to the ground, stand up again',
        ]);

        Exercise::create([
            'name' => 'Shoulder Press',
            'created_by' => $user->id,
            'video_url' => '',
            'description' => 'Stand up straight, hold the bar against the top of your chest, push it up over your head, lower it back to your chest.',
        ]);

        Workout::create([
            'name' => 'Another Workout',
            'created_by' => 2,
            'description' => 'Lorem ipsum dolor est...',
        ]);
    }
}
