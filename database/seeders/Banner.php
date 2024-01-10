<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Banner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner = [
            
            ['image' => 'banner2.jpeg'],
            ['image' => 'banner3.png'],
            ['image' => 'banner4.jpeg'],
            ['image' => 'banner5.png'],
        ];
        DB::table('banners')->insert($banner);
    }
}
