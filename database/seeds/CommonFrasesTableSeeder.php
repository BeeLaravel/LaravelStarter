<?php
use Illuminate\Database\Seeder;

class CommonFrasesTableSeeder extends Seeder {
    public function run() {
        \DB::table('common_frases')->delete();
        
        \DB::table('common_frases')->insert(array (
            0 => 
            array (
                'category' => 'tacit',
                'content' => '无缘对面不相识',
                'created_at' => '2019-09-05 08:37:02',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 1,
                'slug' => '0',
                'sort' => 0,
                'updated_at' => '2019-09-05 08:37:02',
            ),
            1 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:37:38',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 2,
                'slug' => '10',
                'sort' => 1,
                'updated_at' => '2019-09-05 08:37:38',
            ),
            2 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 3,
                'slug' => '20',
                'sort' => 2,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            3 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 4,
                'slug' => '30',
                'sort' => 3,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            4 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 5,
                'slug' => '40',
                'sort' => 4,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            5 => 
            array (
                'category' => 'tacit',
                'content' => '你保住了我们的革命友谊',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 6,
                'slug' => '50',
                'sort' => 5,
                'updated_at' => '2019-09-05 08:42:25',
            ),
            6 => 
            array (
                'category' => 'tacit',
                'content' => '让我们的革命友谊再升华一下吧',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 7,
                'slug' => '60',
                'sort' => 6,
                'updated_at' => '2019-09-05 08:43:21',
            ),
            7 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 8,
                'slug' => '70',
                'sort' => 7,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            8 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 9,
                'slug' => '80',
                'sort' => 8,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            9 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 10,
                'slug' => '90',
                'sort' => 9,
                'updated_at' => '2019-09-05 08:38:06',
            ),
            10 => 
            array (
                'category' => 'tacit',
                'content' => '前世的五百次回眸才换来今生的擦肩而过',
                'created_at' => '2019-09-05 08:38:06',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 11,
                'slug' => '100',
                'sort' => 10,
                'updated_at' => '2019-09-05 08:38:06',
            ),
        ));
    }
}