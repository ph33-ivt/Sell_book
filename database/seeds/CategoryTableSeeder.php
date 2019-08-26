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
        Category::create([
        	'name'=> 'Truyện',
        	'parent_id'=>1,
        	'created_at'=>now(),
        	'updated_at'=>now()
        ],
        [
        	'name'=> 'Sách',
        	'parent_id'=>2,
        	'created_at'=>now(),
        	'updated_at'=>now()
        ],
    	[
        	'name'=> 'Văn Phòng Phẩm',
        	'parent_id'=>3,
        	'created_at'=>now(),
        	'updated_at'=>now()
        ]);
    }
}
