<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Table
        DB::table('categories')->insert([
            'name' => 'Beach'
        ]);

        DB::table('categories')->insert([
            'name' => 'Mountain'
        ]);

        DB::table('categories')->insert([
            'name' => 'Museum'
        ]);

        DB::table('categories')->insert([
            'name' => 'Temple'
        ]);

        DB::table('categories')->insert([
            'name' => 'Zoo'
        ]);

        DB::table('categories')->insert([
            'name' => 'Lake'
        ]);

        DB::table('categories')->insert([
            'name' => 'National Park'
        ]);

        DB::table('categories')->insert([
            'name' => 'Waterfall'
        ]);

        DB::table('categories')->insert([
            'name' => 'Crater'
        ]);

    }
}
