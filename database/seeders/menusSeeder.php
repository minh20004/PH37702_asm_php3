<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            ['name' => 'Thời trang'],
            ['name' => 'Làm đẹp'],
            ['name' => 'Văn hóa'],
            ['name' => 'LIFESTYLE'],
            ['name' => 'Chào ngày mới'],
            ['name' => 'video'],
        ]);
    }
}
