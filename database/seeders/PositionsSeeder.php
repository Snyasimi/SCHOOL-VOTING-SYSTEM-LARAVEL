<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            'Position' => 'CHAIRPERSON'
        ]);
        DB::table('positions')->insert([
            'Position' => 'VICE CHAIRPERSON'
        ]);
        DB::table('positions')->insert([
            'Position' => 'TREASURER'
        ]);
        DB::table('positions')->insert([
            'Position' => 'SECRETARY GENERAL'
        ]);
        DB::table('positions')->insert([
            'Position' => 'SPORTS AND WELFARE'
        ]);
    }
}
