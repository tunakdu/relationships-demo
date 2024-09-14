<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // UserSeeder
        $this->call(UserSeeder::class);

        // ProfileSeeder
        $this->call(ProfileSeeder::class);

        // PostSeeder
        $this->call(PostSeeder::class);

        // VideoSeeder
        $this->call(VideoSeeder::class);

        // CommentSeeder
        $this->call(CommentSeeder::class);

        // RoleSeeder
        $this->call(RoleSeeder::class);

        // TagSeeder
        $this->call(TagSeeder::class);

        // TaggableSeeder
        $this->call(TaggableSeeder::class);
    }
}
