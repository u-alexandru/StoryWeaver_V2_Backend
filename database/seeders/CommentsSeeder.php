<?php

namespace Database\Seeders;

use App\Models\Novels\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'content' => 'This is a comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 1,
            ],
            [
                'content' => 'This is another comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 1,
            ],
            [
                'content' => 'This is a comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 2,
            ],
            [
                'content' => 'This is another comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 2,
            ],
            [
                'content' => 'This is a comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 3,
            ],
            [
                'content' => 'This is another comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 3,
            ],
            [
                'content' => 'This is a comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 4,
            ],
            [
                'content' => 'This is another comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 4,
            ],
            [
                'content' => 'This is a comment',
                'likes' => 0,
                'dislikes' => 0,
                'author_id' => 1,
                'chapter_id' => 5,
            ],
            [
                'content' => 'This is another comment',
                'likes' => 27,
                'dislikes' => 3,
                'author_id' => 1,
                'chapter_id' => 5,
            ],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
