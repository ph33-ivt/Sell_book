<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Role::insert([
			[
				'name'=>'Admin',
				'created_at'=> now(),
				'updated_at'=> now()
			],
			[
				'name'=>'User',
				'created_at'=> now(),
				'updated_at'=> now(),
			]
		]);
		
    }
}
