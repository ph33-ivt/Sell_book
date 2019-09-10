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
            'name'=> 'Truyện ma',
            'parent_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách văn hóa',
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
            'name'=> 'Sách tham khảo',
            'parent_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện tranh',
            'parent_id'=>1,
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
            'name'=> 'Truyện ma Nguyễn Ngọc Ngạn',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện ma tháng 7 cô hồn',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện ma ko có thật',
            'parent_id'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách toán',
            'parent_id'=>4,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách hóa',
            'parent_id'=>4,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách lý',
            'parent_id'=>4,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện Conan',
            'parent_id'=>5,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện Sherlock Holmes',
            'parent_id'=>5,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện hỏa ngục',
            'parent_id'=>5,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách giải toán',
            'parent_id'=>6,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách giải hóa',
            'parent_id'=>6,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Sách giải lý',
            'parent_id'=>6,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện tranh Doraemon',
            'parent_id'=>7,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện tranh Lonney Tones',
            'parent_id'=>7,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Truyện tranh Tom & Jerry',
            'parent_id'=>7,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Cuốn theo chiều gió',
            'parent_id'=>8,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Hoàng tử bé',
            'parent_id'=>8,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
            'name'=> 'Chúa tể của những chiếc nhẫn',
            'parent_id'=>8,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
        ];
        Category::insert($data);
      
        
        
    }
}
