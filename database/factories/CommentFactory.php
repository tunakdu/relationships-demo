<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'comment' => $this->faker->text,
            'commentable_id' => function () {
                return Post::factory()->create()->id; // Default to Post
            },
            'commentable_type' => function () {
                return Post::class; // Default to Post
            },
        ];
    }

    public function forVideo()
    {
        return $this->state(function (array $attributes) {
            return [
                'commentable_id' => Video::factory()->create()->id,
                'commentable_type' => Video::class,
            ];
        });
    }
}

