<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //     $this->call(mahasiswaSeeder::class);
        //     $this->call(matakuliahSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
