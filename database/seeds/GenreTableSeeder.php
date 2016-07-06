<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Humours'
        ]);
        DB::table('genres')->insert([
            'name' => 'Biography'
        ]);
    }
}
