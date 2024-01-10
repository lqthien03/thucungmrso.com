<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment = [
            ['content' => 'Mới mua thức ăn cho chó tại cửa hàng, bé cưng ở nhà rất thích, lần sau sẽ ghé shop nữa.','user_id'=>'1','product_id'=>'4'],
            ['content' => 'anh chủ hài hước, tư vấn về sản phẩm rất nhiệt tình. Thank shop nhiều.','user_id'=>'2','product_id'=>'2'],
        ];
        DB::table('comments')->insert($comment);
    }
}
