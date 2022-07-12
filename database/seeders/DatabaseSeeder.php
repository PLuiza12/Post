<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        for($i = 0; $i< 10; $i++){
            User::factory()->create([

                'email' => 'user' . $i. '@email.com'
                
            ]);
        }

        $this->call([
            TagSeeder::class,
            PostSeeder::class,
            PostTagSeeder::class,
        ]);
    }
}
