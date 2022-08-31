<?php

namespace Database\Seeders;

use App\Models\Taxonomy;
use Illuminate\Database\Seeder;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taxonomy::insert([
            [
                'name' => 'category',
                'description' => 'category taxonomy',
            ],
            [
                'name' => 'tag',
                'description' => 'tag taxonomy',
            ],
        ]);
    }
}
