<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog = [
            ['image'=>'blog1.png','tittle'=>'Nguyên nhân và cách xử lý mèo con bị tiêu chảy hoặc nôn','link' => 'nguyen-nhan-va-cach-xu-ly-meo-con-bi-tieu-chay-hoac-bi-non', 'description' => 'Nguyên nhân và cách xử lý mèo con bị tiêu chảy hoặc nôn','content'=>'Nguyên nhân và cách xử lý mèo con bị tiêu chảy hoặc nôn'],
            ['image'=>'blog2.png','tittle'=>'Liệu thức ăn cho mèo Me-o có tốt cho các bé mèo nhà bạn?','link' => 'lieu-thuc-an-cho-meo-me-o-co-tot-cho-cac-be-meo-nha-ban', 'description' => 'Ngày nay, có rất nhiều người bận công việc, lịch trình riêng nên ít có thời gian xắn tay nấu những món ngon, giàu dinh dưỡng cho các bé mèo. Chính vì vậy, thức ăn dạng hạt khô đang ngày càng phổ biến, trong số đó có dòng thức ăn cho mèo Me-o ngày càng được ưu chuộng. Nhưng liệu nó có thực sự tốt cho các boss và phù hợp với điều kiện tài chính của các hộ gia đình??? Hãy cùng mình tìm hiểu nhé!!!','content'=>'Ngày nay, có rất nhiều người bận công việc, lịch trình riêng nên ít có thời gian xắn tay nấu những món ngon, giàu dinh dưỡng cho các bé mèo. Chính vì vậy, thức ăn dạng hạt khô đang ngày càng phổ biến, trong số đó có dòng thức ăn cho mèo Me-o ngày càng được ưu chuộng. Nhưng liệu nó có thực sự tốt cho các boss và phù hợp với điều kiện tài chính của các hộ gia đình??? Hãy cùng mình tìm hiểu nhé!!!'],
            ['image'=>'blog3.png','tittle'=>'Top 10 thức ăn khô cho chó tốt nhất năm 2020','link' => 'top-10-thuc-an-kho-cho-cho-tot-nhat-nam-2020', 'description' => 'Chó là loại động vật đang được nhiều người yêu thích và lựa chọn nuôi. Hiện nay, các nhà sản xuất đã cho ra đời loại thực phẩm hạt khô dành cho chó, vừa tiện lợi vừa đầy đủ chất dinh dưỡng để bạn có thể sử dụng cho chúng ăn mỗi ngày hoặc khi không có nhiều thời gian.','content'=>'Chó là loại động vật đang được nhiều người yêu thích và lựa chọn nuôi. Hiện nay, các nhà sản xuất đã cho ra đời loại thực phẩm hạt khô dành cho chó, vừa tiện lợi vừa đầy đủ chất dinh dưỡng để bạn có thể sử dụng cho chúng ăn mỗi ngày hoặc khi không có nhiều thời gian.'],


        ];
        DB::table('blogs')->insert($blog);
    }
}   
