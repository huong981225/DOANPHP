<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
         DB::table('users')->insert([
           'name'=> 'Hien', 
           'email'=> 'utnho.huynhhien@gmail.com',  
            'phone'=>'00364844036',
            'address'=>'813 Lê Đình Cẩn, phường Tân Tạo, quận Bình Tân, tp Hồ Chí Minh',
            'level' =>'1',
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('users')->insert([
           'name'=> 'Nhung', 
           'email'=> 'huynhhien@gmail.com',
            'phone'=>'00364844036',
            'address'=>'813 Lê Đình Cẩn, phường Tân Tạo, quận Bình Tân, tp Hồ Chí Minh',  
            'level' =>rand(0, 1),
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('users')->insert([
            'name'=> 'Nghi', 
            'email'=> 'hanahuynh@gmail.com', 
            'phone'=>'00364844036',
            'address'=>'813 Lê Đình Cẩn, phường Tân Tạo, quận Bình Tân, tp Hồ Chí Minh', 
            'level' =>rand(0, 1),
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
