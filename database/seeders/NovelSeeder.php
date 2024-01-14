<?php

namespace Database\Seeders;

use App\Models\Novels\Novel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $novels = [
           [
               'title' => 'World of Fire',
               'description' => 'The main character wakes up in a world made of fire.',
               'author_notes' => 'I am writing this novel in my free time!',
               'typology_id' => 1
           ],
            [
                'title' => 'I reincarnated as a one trillion dollar bill.',
                'description' => 'I am now the most sought after object on earth',
                'author_notes' => 'I am under potent shroms!',
                'typology_id' => 2
            ],
            [
                'title' => 'Book of Ra',
                'description' => 'The world is at its zenith, the sands are getting closer.',
                'author_notes' => 'I am writing this book in my free time!',
                'typology_id' => 3
            ]
        ];

        foreach($novels as $novel) {
            $newNovel = Novel::create($novel);
            $newNovel->tags()->sync([1,2]);
            $newNovel->genres()->sync([1,2]);
        }
    }
}
