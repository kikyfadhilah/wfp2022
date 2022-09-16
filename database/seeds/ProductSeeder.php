<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <= 10; $i++){
            for($j= 0; $j<3; $j++){
                DB::table('products')->insert([
                    'nama' => Str::random(10),
                    'category_id' => $i
                ]);
            }
        }
    }
}
