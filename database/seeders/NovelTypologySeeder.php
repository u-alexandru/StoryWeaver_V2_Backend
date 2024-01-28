<?php

namespace Database\Seeders;

use App\Models\Novels\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typologies = [
            [
                'id' => 1,
                'name' => 'Web Novel',
                'description' => 'A web novel is a novel published online. It could be a novel the author has decided to write on a website, or a novel the author has decided to publish on a web novel platform.',
            ],
            [
                'id' => 2,
                'name' => 'Interactive Web Novel',
                'description' => 'An interactive web novel is a web novel that allows the readers to interact with the story. The author will write the story, and the readers will be able to choose what the characters will do. The author will then write the next chapter based on the readers\' choices.',
            ],
        ];

        foreach ($typologies as $typology) {
            Typology::create($typology);
        }
    }
}
