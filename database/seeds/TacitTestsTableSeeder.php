<?php
use Illuminate\Database\Seeder;

class TacitTestsTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('tacit_tests')->delete();
        
        \DB::table('tacit_tests')->insert(array (
            0 => 
            array (
                'created_at' => '2019-09-05 16:01:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 1,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 16:01:06',
            ),
            1 => 
            array (
                'created_at' => '2019-09-05 16:01:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 2,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 16:01:06',
            ),
            2 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 3,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            3 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 4,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            4 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 5,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            5 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 2,
                'deleted_at' => NULL,
                'id' => 6,
                'test_id' => 0,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            6 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 3,
                'deleted_at' => NULL,
                'id' => 7,
                'test_id' => 1,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            7 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 4,
                'deleted_at' => NULL,
                'id' => 8,
                'test_id' => 1,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            8 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 2,
                'deleted_at' => NULL,
                'id' => 9,
                'test_id' => 2,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            9 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 3,
                'deleted_at' => NULL,
                'id' => 10,
                'test_id' => 2,
                'unlock' => 1,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            10 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 4,
                'deleted_at' => NULL,
                'id' => 11,
                'test_id' => 2,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            11 => 
            array (
                'created_at' => '2019-09-05 17:32:15',
                'created_by' => 2,
                'deleted_at' => NULL,
                'id' => 12,
                'test_id' => 3,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:32:15',
            ),
            12 => 
            array (
                'created_at' => '2019-09-05 17:33:41',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 13,
                'test_id' => 6,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:33:43',
            ),
            13 => 
            array (
                'created_at' => '2019-09-05 17:33:41',
                'created_by' => 4,
                'deleted_at' => NULL,
                'id' => 14,
                'test_id' => 3,
                'unlock' => 1,
                'updated_at' => '2019-09-05 17:33:43',
            ),
            14 => 
            array (
                'created_at' => '2019-09-05 17:33:41',
                'created_by' => 2,
                'deleted_at' => NULL,
                'id' => 15,
                'test_id' => 4,
                'unlock' => 0,
                'updated_at' => '2019-09-05 17:33:43',
            ),
        ));
        
        
    }
}