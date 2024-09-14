<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Taggable;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaggableFactory extends Factory
{
    protected $model = Taggable::class;

    public function definition()
    {
        return [
            'tag_id' => Tag::factory(),
            'taggable_id' => 1, // Bu örnekte id'yi sabitliyoruz, kendi ihtiyaçlarınıza göre düzenleyin
            'taggable_type' => 'App\Models\Post', // Örneğin, Post sınıfını kullanıyoruz
        ];
    }
}
