<?php

namespace Database\Seeders;

use App\Models\UserMeta;
use Illuminate\Database\Seeder;

class UserMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($users, $meta)
    {
        for ($i = 1; $i <= $users + 1; $i++) {
            UserMeta::factory(rand( 1, $meta))->user($i)->create();
        }
    }
}
