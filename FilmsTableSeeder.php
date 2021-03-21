<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Film;



class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Film::factory()->times(100)->create();
        /*DB::table('films')->insert([
        	'title'=>'Harry Potter'
        	'genre'=>'fantastic',
        	'producer'=>'Kris',
        	'rating'=>'8.0',
        ]);*/
    }
}
