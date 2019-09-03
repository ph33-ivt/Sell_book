<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
            'name'=> 'Truyện',
            'parent_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách',
            'parent_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
           
            [
            'name'=> 'Văn phòng phẩm',
            'parent_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách khoa học',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Bàn học',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách tiếng Anh',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện cổ tích',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Hộp bút chì màu',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện kinh dị',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách tham khảo',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện trinh thám',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách hóa học',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sổ tay',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện tranh doraemon',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Ba lô',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách tiểu thuyết',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Vở',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện ngụ ngôn',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
        ];
        Category::insert($data);
      
        
        
    }
}
