<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

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
        $this->call(shopSeeder::class);
        $this->call(paintingSeeder::class);
        
        
        $user1 = User::factory()->create([
            'name' => 'Maria1',
            'email' => 'maria1@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user3 = User::factory()->create([
            'name' => 'Maria2',
            'email' => 'maria2@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user3 = User::factory()->create([
            'name' => 'Maria3',
            'email' => 'maria3@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        //$this->call(UserSeeder::class);



    }
}