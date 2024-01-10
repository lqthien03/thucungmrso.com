<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class category_2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_2 = [
            ['tittle' => 'Thức ăn cho gà', 'link' => 'thuc-an-cho-ga', 'description' => 'cung cấp thức ăn cho gà', 'category_1_id' => '1'],
            ['tittle' => 'Thuốc cho gà', 'link' => 'thuoc-cho-ga', 'description' => 'bán các loại thuốc cho gà', 'category_1_id' => '1'],
            ['tittle' => 'Phụ kiện cho gà', 'link' => 'phu-kien-cho-ga', 'description' => 'bán phụ kiện cho gà','category_1_id' => '1'],

            ['tittle' => 'Thức ăn cho chó', 'link' => 'thuc-an-cho-cho', 'description' => 'cung cấp thức ăn cho chó', 'category_1_id' => '2'],
            ['tittle' => 'Thuốc cho chó', 'link' => 'thuoc-cho-cho', 'description' => 'bán các loại thuốc cho chó', 'category_1_id' => '2'],
            ['tittle' => 'Phụ kiện cho chó', 'link' => 'phu-kien-cho-cho', 'description' => 'bán phụ kiện cho chó','category_1_id' => '2'],

            ['tittle' => 'Thức ăn cho mèo', 'link' => 'thuc-an-cho-meo', 'description' => 'cung cấp thức ăn cho mèo', 'category_1_id' => '3'],
            ['tittle' => 'Thuốc cho mèo', 'link' => 'thuoc-cho-meo', 'description' => 'bán các loại thuốc cho mèo', 'category_1_id' => '3'],
            ['tittle' => 'Phụ kiện cho mèo', 'link' => 'phu-kien-cho-meo', 'description' => 'bán phụ kiện cho mèo','category_1_id' => '3'],

            ['tittle' => 'Thức ăn cho chim', 'link' => 'thuc-an-cho-chim', 'description' => 'cung cấp thức ăn cho chim', 'category_1_id' => '4'],
            ['tittle' => 'Thuốc cho chim', 'link' => 'thuoc-cho-chim', 'description' => 'bán các loại thuốc cho chim', 'category_1_id' => '4'],
            ['tittle' => 'Phụ kiện cho chim', 'link' => 'phu-kien-cho-chim', 'description' => 'bán phụ kiện cho chim','category_1_id' => '4'],

            ['tittle' => 'Thuốc trồng trọt', 'link' => 'thuoc-trong-trot', 'description' => 'cung cấp các loại thuốc, dinh dưỡng trồng trọt', 'category_1_id' => '5'],
            ['tittle' => 'Chậu cây trồng', 'link' => 'chau-cay-trong', 'description' => 'bán các loại chậu cây trồng', 'category_1_id' => '5'],
            ['tittle' => 'Phân bón', 'link' => 'phan-bon', 'description' => 'bán phân bón trồng trọt','category_1_id' => '5'],
            ['tittle' => 'Đất trồng trọt', 'link' => 'dat-trong-trot', 'description' => 'Bán đất trồng trọt','category_1_id' => '5'],

            ['tittle' => 'Gạo', 'link' => 'gao', 'description' => 'Bán gạo','category_1_id' => '6'],
            ['tittle' => 'Nếp', 'link' => 'nep', 'description' => 'Bán nếp','category_1_id' => '6'],
        ];

        // Thêm dữ liệu vào bảng categories
        DB::table('category_2s')->insert($category_2);
    }
}
