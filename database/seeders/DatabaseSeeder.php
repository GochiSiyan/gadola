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
            'post_count' => 50,
            'post_meta_count' => 5,
            'relation_count' => 5,
            'commerce_count' => 30,
            'cart_count' => 10,
        ];

        // user seeder
        \App\Models\User::factory($param['user_count'])->create();

        // taxonomy seeder
        $this->call(TaxonomySeeder::class, false, [
            'taxonomy' => $param['taxonomy'],
        ]);

        // term seeder
        $this->call(TermSeeder::class, false, [
            'taxonomy' => count($param['taxonomy']),
            'term' => $param['term_count'],
        ]);

        // post seeder
        $this->call(PostSeeder::class, false, [
            'post' => $param['post_count'],
        ]);

        // post meta seeder
        $this->call(PostMetaSeeder::class, false, [
            'post' => $param['post_count'],
            'meta' => $param['post_meta_count'],
        ]);

        // relationship seeders
        $this->call(RelationshipSeeder::class, false, [
            'relation' => $param['relation_count'],
            'post' => $param['post_count'],
            'term' => $param['term_count'],
        ]);

        // commerce seeder
        $this->call(CommerceSeeder::class, false, [
            'commerce' => $param['commerce_count'],
            'user' => $param['user_count'],
        ]);

        // commerce data seeder
        $this->call(CommerceDataSeeder::class, false, [
            'count' => $param['cart_count'],
            'commerces' => $param['commerce_count'],
            'posts' => $param['post_count'],
        ]);

        
    }
}
