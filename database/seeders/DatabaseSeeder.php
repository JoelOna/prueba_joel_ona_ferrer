<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i=1; $i < 5; $i++) { 
            DB::table('books')->insert([
                'title' => 'Titulo libro '.$i,
                'author' => 'Autor '.$i,
            ]);
        }
       
    }
}
