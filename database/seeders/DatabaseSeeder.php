<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Forum;
use App\Models\User;
use App\Models\Event;
use App\Models\Reclamation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Forum::factory(6)->create();
        Event::factory(6)->create([
            'user_id' => $user->id
        ]);
        Reclamation::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
