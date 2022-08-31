<?php

namespace Database\Seeders;

use App\Models\PostMeta;
use Illuminate\Database\Seeder;

class PostMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($posts, $meta)
    {
        for ($i=1; $i < $posts + 1; $i++) {
            PostMeta::factory(rand(1, $meta))->post($i)->create();
        }
    }
}
