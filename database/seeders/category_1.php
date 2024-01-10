<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class category_1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Tạo danh sách các danh mục cấp 1
            $category_1 = [
                ['tittle' => 'SHOP CHO GÀ','link' => 'shop-cho-ga', 'description' => 'bán đồ ăn, phụ kiện cho gà'],
                ['tittle' => 'SHOP CHO CHÓ','link' => 'shop-cho-cho', 'description' => 'bán đồ ăn, phụ kiện cho chó'],
                ['tittle' => 'SHOP CHO MÈO','link' => 'shop-cho-meo', 'description' => 'bán đồ ăn, phụ kiện cho mèo'],
                ['tittle' => 'SHOP CHO CHIM','link' => 'shop-cho-chim', 'description' => 'bán đồ ăn, phụ kiện cho chim'],
                ['tittle' => 'VẬT TƯ NÔNG NGHIỆP','link' => 'vat-tu-nong-nghiep', 'description' => 'bán vật dụng, vật tư nông nghiệp'],
                ['tittle' => 'SẢN PHẨM LÚA GẠO','link' => 'san-pham-lua-gao', 'description' => 'bán sản phẩm lúa gạo các loại'],
                // Thêm các danh mục khác nếu cần
            ];
    
            // Thêm dữ liệu vào bảng categories
            DB::table('category_1s')->insert($category_1);
    }
}
