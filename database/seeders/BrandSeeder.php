<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Adore Me',
                'description' => 'A modern lingerie brand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Outlines',
                'description' => 'Box model brand with apparel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Prestige',
                'description' => 'Cosmetics brand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Joyja',
                'description' => 'The cool period panty brand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'name' => 'Walkpop',
                'description' => 'Sheer and durable thighs brand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Belabumbum',
                'description' => 'The one maternity brand',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Coolibrium',
                'description' => 'Apparel that keeps you cool',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nueskin',
                'description' => 'Nueskin your second skin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ReApparel',
                'description' => 'Apparel made with recycled materials',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
