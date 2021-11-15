<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
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
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@email.com',
        //     'password' => bcrypt('admin123')
        // ]);

        // User::create([
        //     'name' => 'Dr. Sehat',
        //     'email' => 'drsehat@email.com',
        //     'password' => bcrypt('dokter123')
        // ]);

        
        //\App\Models\User::factory(8)->create();
        //\App\Models\Topic::factory(20)->create();
        \App\Models\Comment::factory(40)->create();


        // Blog::create([
        //     'title' => "",
        //     'slug' => "",
        //     'body' => ""
        // ]);
    }
}
