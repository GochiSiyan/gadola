<?php

namespace Database\Seeders;

use App\Models\CommerceMeta;
use Illuminate\Database\Seeder;

class CommerceMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($commerces, $meta)
    {
        for ($i=1; $i < $commerces + 1; $i++) {
            CommerceMeta::factory(rand(1, $meta))->commerce($i)->create();
        }
    }
}
