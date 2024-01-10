<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            ['image' => 'kh.jpg','name' => 'Trịnh Việt Long Vũ','email' => 'vu@gmail.com', 'password' => '0856711788Vu'],
            ['image' => 'kh2.jpg','name' => 'Lê Quốc Thiện','email' => 'thien@gmail.com', 'password' => '0856711788Vu'],

            // Thêm các danh mục khác nếu cần
        ];

        // Thêm dữ liệu vào bảng categories
        DB::table('users')->insert($user);
    }
}
