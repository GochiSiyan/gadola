<?php

namespace Database\Seeders;

use App\Models\Relationship;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($relation, $posts, $terms)
    {
        $terms = range(1, $terms);
        for ($i=1; $i < $posts+1; $i++) {
            $count = rand(1, $relation);

            foreach(array_rand($terms, $count) as $term) {
                Relationship::create([
                    'post_id' => $i,
                    'term_id' => $term,
                ]);
            }
        }
    }
}