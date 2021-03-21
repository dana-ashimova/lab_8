<?php

namespace Database\Seeders;

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
    	$this->call(FilmsTableSeeder::class);
    	/*DB::table('films')->insert([
            'title' => Str::random(10),
            'genre' => Str::random(10),
            'producer' => Str::random(10),
            'rating' => Str::random(10),
            
        ]);*/         
    }
}
