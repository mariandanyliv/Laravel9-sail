<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allcategory = [
            [
                'name' => 'Category 1'
            ],
            [
                'name' => 'Category 2'
            ],
            [
                'name' => 'Category 3'
            ],
            [
                'name' => 'Category 4'
            ],
        ];

        DB::table('categories')->insert($allcategory);
    }
}
