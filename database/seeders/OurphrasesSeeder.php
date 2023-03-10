<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurphrasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phrases')->insert([
            'author'=>'Buda', 
            'phrase'=>'La vida es rara', 
            'image'=>'https://tiendabudista.es/wp-content/uploads/2018/01/buda-Shakyamuni-cara-931141.jpg',
            'is_onslider'=> true
        ]);
    }
}
