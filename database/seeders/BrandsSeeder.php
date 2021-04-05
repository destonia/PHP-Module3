<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name'=>"'Pond's"
        ]);

        DB::table('brands')->insert([
            'name'=>"'Sunsilk"
        ]);

        DB::table('brands')->insert([
            'name'=>"'Lux"
        ]);
    }
}
