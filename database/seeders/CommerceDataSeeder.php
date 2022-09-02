<?php

namespace Database\Seeders;

use App\Models\CommerceData;
use Illuminate\Database\Seeder;

class CommerceDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($count, $commerces, $posts)
    {
        $posts = range(1, $posts);
        for ($i=1; $i < $commerces + 1; $i++) {
            $post = array_rand($posts, rand(1, $count));
            foreach ($post as $key => $value) {
                CommerceData::factory(1)->commerce($i)->post($value)->create();
            }
        }
    }
}
