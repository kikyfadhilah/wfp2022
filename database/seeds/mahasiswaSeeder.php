<?php

use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('mahasiswas')->insert([
            'nrp' => '160419134',
            'nama' => 'Kiky',
        ]);

        DB::table('mahasiswas')->insert([
            'nrp' => '160419138',
            'nama' => 'Wahyu',
        ]);
        DB::table('mahasiswas')->insert([
            'nrp' => '160419150',
            'nama' => 'Michael',
        ]);
    }
}
