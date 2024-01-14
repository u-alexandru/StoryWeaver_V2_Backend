<?php

namespace Database\Seeders;

use App\Models\Novels\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Male Protagonist',
                'description' => 'The protagonist of the novel is male.'
            ],
            [
                'name' => 'Female Protagonist',
                'description' => 'The protagonist of the novel is female.'
            ],
            [
                'name' => 'Overpowered Protagonist',
                'description' => 'The protagonist of the novel is incredibly powerful.'
            ]
        ];

        foreach($tags as $tag) {
            Tag::create($tag);
        }
    }
}
