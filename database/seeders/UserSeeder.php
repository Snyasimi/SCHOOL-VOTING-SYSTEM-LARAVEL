<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => Str::ulid(),
            'Name' => 'Admin 1',
            'Email' => 'admin@gmail.com',
            'RegNumber' => 'ICT/001/001',
            'Has_voted' => false,
            'is_admin' => true,
            'password' => bcrypt('admin123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        for($i=0;$i<15;$i++)
        {
            DB::table('users')->insert([
                'id' => Str::ulid(),
                'Name' => 'Candidate '.$i,
                'Email' => 'candidate'.$i.'@gmail.com',
                'RegNumber' => 'DIT/001/00'. $i,
                'Has_voted' => false,
                'is_admin' => false,
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        for($i=0;$i<10;$i++)
        {
            DB::table('users')->insert([
                'id' => Str::ulid(),
                'Name' => 'OldCandidate '.$i,
                'Email' => 'Oldcandidate'.$i.'@gmail.com',
                'RegNumber' => 'DIT/001/00'. $i,
                'Has_voted' => false,
                'is_admin' => false,
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now()->subYears(2),
                'updated_at' => Carbon::now()->subYears(2)
            ]);
        }
    }
}
