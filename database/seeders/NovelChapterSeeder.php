<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$chapters = [
            [
                'title' => 'Chapter 1',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 1,
            ],
            [
                'title' => 'Chapter 2',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 2,
            ],
            [
                'title' => 'Chapter 3',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 3,
            ],
            [
                'title' => 'Chapter 4',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 4,
            ],
            [
                'title' => 'Chapter 5',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 5,
            ],
            [
                'title' => 'Chapter 6',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 6,
            ],
            [
                'title' => 'Chapter 7',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 7,
            ],
            [
                'title' => 'Chapter 8',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 8,
            ],
            [
                'title' => 'Chapter 9',
                'content' => 'The main character wakes up in a world made of fire.',
                'novel_id' => 1,
                'chapter_number' => 9,
            ]
        ];

        foreach($chapters as $chapter) {
            \App\Models\Novels\Chapter::create($chapter);
        }
    }
}
