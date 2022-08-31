<?php

namespace Database\Seeders;

use App\Models\Commerce;
use Illuminate\Database\Seeder;

class CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($commerce, $user)
    {
        Commerce::factory($commerce)->user($user)->create();
    }
}
