<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'taxonomy' => [
                [
                    'name' => 'category',
                    'description' => 'category taxonomy',
                ],
                [
                    'name' => 'tag',
                    'description' => 'tag taxonomy',
                ],
            ],
            'user_count' => 10,
            'term_count' => 10,
        ];

        //user seeder
        \App\Models\User::factory($param['user_count'])->create();

        //taxonomy seeder
        $this->call(TaxonomySeeder::class, false, [
            'taxonomy' => $param['taxonomy'],
        ]);

        //term seeder
        $this->call(TermSeeder::class, false, [
            'taxonomy' => count($param['taxonomy']),
            'term' => $param['term_count'],
        ]);
    }
}
