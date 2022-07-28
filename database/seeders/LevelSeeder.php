<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            [
                'name' => 'Newcomer',
                'points_needed' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Apprentice',
                'points_needed' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Junior',
                'points_needed' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Master',
                'points_needed' => 80,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Grand Master',
                'points_needed' => 150,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
