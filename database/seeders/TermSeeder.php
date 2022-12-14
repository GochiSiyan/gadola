<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($taxonomy, $term)
    {
        Term::factory($term)->taxonomies($taxonomy)->create();
    }
}
