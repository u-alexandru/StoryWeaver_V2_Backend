<?php

namespace Database\Seeders;

use App\Models\Novels\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // greate 5 genres, they have name and description
        $genres = [
            [
                'name' => 'Action',
'description' => 'Action is a genre of fiction in which violence plays a prominent role. Action fiction is a form of genre fiction whose subject matter is characterized by emphasis on exciting action sequences. This does not always mean they exclude character development or story-telling. Action is not limited to fiction, however. Action films and Western films are associated with the action genre.',
            ],
            [
                'name' => 'Adventure',
                'description' => '',
            ]
        ];

        foreach($genres as $genre) {
            Genre::create($genre);
        }
    }
}
