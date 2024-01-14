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
                'name' => 'Novel',
                'description' => 'A novel is a relatively long work of narrative fiction, normally written in prose form, and which is typically published as a book.',
            ],
            [
                'name' => 'Novella',
                'description' => 'A novella is a text of written, fictional, narrative prose normally longer than a short story but shorter than a novel, somewhere between 17,500 and 40,000 words.',
            ],
            [
                'name' => 'Short Story',
                'description' => 'A short story is a piece of prose fiction that typically can be read in one sitting and focuses on a self-contained incident or series of linked incidents, with the intent of evoking a single effect or mood.',
            ],
            [
                'name' => 'Flash Fiction',
                'description' => 'Flash fiction is a fictional work of extreme brevity that still offers character and plot development. Identified varieties, many of them defined by word count, include the six-word story, the 280-character story, the "dribble" (50 words), the "drabble" (100 words), "sudden fiction" (750 words), flash fiction (1,000 words), nanotale, and "micro-story".',
            ],
            [
                'name' => 'Microfiction',
                'description' => 'Microfiction is a genre of fiction that is characterized by its extreme brevity. In other words, microfiction stories are usually less than 300 words in length. Although there is no standard length for microfiction stories, they are usually not more than 300 words, and often much shorter.',
            ],
            [
                'name' => 'Poetry',
                'description' => 'Poetry is a form of literature that uses aesthetic and often rhythmic qualities of language—such as phonaesthetics, sound symbolism, and metre—to evoke meanings in addition to, or in place of, the prosaic ostensible meaning.',
            ],
            [
                'name' => 'Poetry Collection',
                'description' => 'A poetry collection is often a compilation of several poems by one poet to be published in a single volume or chapbook. A collection can include any number of poems, ranging from a few (e.g. the four long poems in T. S. Eliot\'s Four Quartets)
                to several hundred poems (as is often seen in collections of haiku). Typically the poems included in single volume of poetry, or a cycle of poems, are linked by their style or thematic material.',
            ]
        ];

        foreach ($typologies as $typology) {
            Typology::create($typology);
        }
    }
}
