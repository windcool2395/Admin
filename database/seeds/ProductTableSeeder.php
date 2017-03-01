<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name' => 'Không gia đình','price'=> '119000', 'thumbnail'=>'aa.jpg', 'category_id'=>'1', 'discount'=> '10', 'description'=>'Là 1 trong 100 cuốn sách kinh điển DINHTIBOOKS khuyên đọc', 'content'=>'Câu chuyện kể vè cậu bé bất hạnh Remi lang bạt trên dăm trường thiên lý, dấn thân giữa tất cả những bần cùng đói khổ...', 'author'=>'Hector Malot', 'publishing_date'=> '2016/10/10', 'publishing_company'=>'NXB Văn Học','number_of_pages'=>'580','size'=>'20 cm x 25 cm','is_deleted'=> '0' ]);
        Product::create(['name' => 'One Piece 73','price'=> '19500', 'thumbnail'=>'op73.jpg', 'category_id'=>'2', 'discount'=> '10', 'description'=>'Tiểu thuyết thiếu niên', 'content'=>'One Piece là bộ manga dành cho lứa tuổi thiếu niên của tác giả Eiichiro Oda, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997.', 'author'=>'Eiichiro Oda', 'publishing_date'=> '2016/10/11', 'publishing_company'=>'NXB Kim Đồng','number_of_pages'=>'260','size'=>'13,5 cm x 19,5 cm','is_deleted'=> '0' ]);
        Product::create(['name' => 'Cuộc đời tròn hay méo','price'=> '60000', 'thumbnail'=>'cdthm.jpg', 'category_id'=>'1', 'discount'=> '10', 'description'=>'Tản văn cuộc đời', 'content'=>'Cuộc đời tròn hay méo (Skybooks & NXB Phụ Nữ) – tản văn châm biếm của nhà báo Hoàng Minh Trí (nick name quen thuộc là Cu Trí)', 'author'=>'Cu Trí', 'publishing_date'=> '2015/10/11', 'publishing_company'=>'NXB SkyBooks','number_of_pages'=>'250','size'=>'13,5 cm x 19,5 cm','is_deleted'=> '0' ]);

    }
}
