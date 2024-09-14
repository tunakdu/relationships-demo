<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Taggable;

class TaggableSeeder extends Seeder
{
    public function run()
    {
        Taggable::factory()->count(30)->create(); // 30 taggable oluştur
    }
}
