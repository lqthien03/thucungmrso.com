<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['tittle' => 'Balo Phi Hành Gia Vận Chuyển Chó Mèo','link' => 'ba-lo-phi-hanh-gia-van-chuyen-cho-meo','content' => '', 'description' => 'Balo Phi Hành Gia Vận Chuyển Chó Mèo', 'image' => '1', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '1', 'category_2_id' => '3'],
            ['tittle' => 'THỨC ĂN ME-O GOLD PERSIAN','link' => 'thuc-an-me-o-gold-persian','content' => '', 'description' => 'Thức ăn cho mèo Me-o Gold Persian', 'image' => 'meo-o-gold-persian.png', 'brand' => '', 'old_price' => '90000', 'new_price' => '75000', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'THỨC ĂN ME-O DÀNH CHO MÈO ĐANG MANG THAI VÀ CHO CON BÚ','link' => 'thuc-an-me-o-danh-cho-meo-dang-mang-thai-va-cho-con-bu','content' => '', 'description' => 'Thức ăn cho mèo đang mang thai và cho con bú', 'image' => 'me-o-danh-cho-meo-dang-mang-thai.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'BÁNH THƯỞNG DẠNG KEM SMARTHEART HƯƠNG VỊ GÀ VÀ BÍ NGÔ','link' => 'banh-thuong-dang-kem-smartheart-huong-vi-ga-va-bi-ngo','content' => '', 'description' => 'Bánh thưởng dạng kem smartheart hương vị gà và bí ngô', 'image' => 'banh-thuong-dang-kem-smartheart.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],

            ['tittle' => 'Thunderbird Platinum','link' => 'thunderbird-platium','content' => '', 'description' => 'Dùng cho giai đoạn biệt dưỡng', 'image' => 'thuc-an-cho-ga-4-4433.jpg', 'brand' => '', 'old_price' => '', 'new_price' => 'Liên hệ', 'category_1_id' => '1', 'category_2_id' => '1'],
            ['tittle' => 'THỨC ĂN ME-O DÀNH CHO MÈO BA TƯ','link' => 'thuc-an-me-o-danh-cho-meo-ba-tu','content' => '', 'description' => '', 'image' => 'meopersian-new-1-5901.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'BÁNH THƯỞNG DẠNG KEM SMARTHEART HƯƠNG VỊ GÀ VÀ BÍ NGÔ','link' => 'banh-thuong-dang-kem-smartheart-huong-vi-ga-va-bi-ngoo','content' => '', 'description' => 'Bánh thưởng dạng kem smartheart hương vị gà và bí ngô', 'image' => 'chicken-pumpkin1-3476.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],
            ['tittle' => 'BÁNH THƯỞNG SMARTHEART VỊ RAU CỦ VÀ HOA QUẢ','link' => 'banh-thuong-smartheart-vi-rau-cu-va-hoa-qua','content' => '', 'description' => 'Bánh thưởng vị rau củ và hoa quả Smartheart', 'image' => 'smartheart-dog-treat-fruit-veggie-new1-3814.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],
            ['tittle' => 'BÁNH THƯỞNG SMARTHEART HÔNG VÀ KHỚP CHẮC KHỎE','link' => 'banh-thuong-smartheart-hong-va-khop-chac-khoe','content' => '', 'description' => 'Bánh thưởng Smartheart giúp hông và khớp chắc khỏe', 'image' => 'smartheart-dog-treat-healthy-hip-happy-joint-new1-3107.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],
            ['tittle' => 'THỨC ĂN DÀNH CHO CHÓ SMARTHEART POWER MAXX','link'=>'thuc-an-cho-cho-smartheat-power-maxx','content' => '','description'=>'THỨC ĂN DÀNH CHO CHÓ SMARTHEART POWER MAXX','image' => 'smartheart-power-maxx-adult-new1-4927.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],

            ['tittle' => 'THUNDERBIRD BABY STAG BOOSTER','link' => 'thunderbird-baby-stag-booster','content' => '','description' => 'THUNDERBIRD BABY STAG BOOSTER','image' => 'thuc-an-cho-ga-1-1984.jpg', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '1', 'category_2_id' => '1'],

            ['tittle' => 'Thunderbird Successor','link' => 'thunderbird-successor','content' => '','description' => 'Thunderbird Successor','image' => 'thuc-an-cho-ga-2-1795.jpg', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '1', 'category_2_id' => '1'],
            ['tittle' => 'STAG DEVELOPER','link' => 'stag-developer','content' => '','description' => 'STAG DEVELOPER','image' => 'thuc-an-cho-ga-stag-developer-6044.jpg', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '1', 'category_2_id' => '1'],
            ['tittle' => 'BÁNH THƯỞNG DẠNG KEM ME-O HƯƠNG VỊ CÁ NGỪ','link' => 'banh-thuong-dang-kem-me-o-huong-vi-ca-ngu','content' => '','description' => 'BÁNH THƯỞNG DẠNG KEM ME-O HƯƠNG VỊ CÁ NGỪ','image' => 'me-o-creamy-treat-bonito-flavor-new1-5371.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'THỨC ĂN MỀM SMARTHEART HƯƠNG VỊ GÀ VÀ GAN NẤU ĐÔNG','link' => 'thuc-an-mem-smartheart-huong-vi-ga-va-gan-nau-dong','content' => '','description' => 'THỨC ĂN MỀM SMARTHEART HƯƠNG VỊ GÀ VÀ GAN NẤU ĐÔNG','image' => 'smartheart-pouch-chicken-liver-flavor-in-jelly-new1-4318.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],


        ];

        // Thêm dữ liệu vào bảng categories
        DB::table('products')->insert($products);
    }
}
