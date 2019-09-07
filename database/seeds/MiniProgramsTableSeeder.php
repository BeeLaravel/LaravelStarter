<?php
use Illuminate\Database\Seeder;

class MiniProgramsTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('mini_programs')->delete();
        
        \DB::table('mini_programs')->insert(array (
            0 => 
            array (
                'created_at' => '2019-09-07 15:48:57',
                'created_by' => 0,
                'customer_service_wechat' => 'beherochuling',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 1,
                'logo' => NULL,
                'share_image' => NULL,
                'slug' => 'tacit',
                'sort' => NULL,
                'title' => '默契度测试',
                'updated_at' => '2019-09-07 15:48:59',
            ),
        ));
        
        
    }
}