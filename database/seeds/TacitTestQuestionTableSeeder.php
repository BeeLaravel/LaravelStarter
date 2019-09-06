<?php
use Illuminate\Database\Seeder;

class TacitTestQuestionTableSeeder extends Seeder {
    public function run() {
        \DB::table('tacit_test_question')->delete();
        
        \DB::table('tacit_test_question')->insert(array (
            0 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 1,
                'test_id' => 1,
            ),
            1 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 2,
                'test_id' => 1,
            ),
            2 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 3,
                'test_id' => 1,
            ),
            3 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 4,
                'test_id' => 1,
            ),
            4 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 5,
                'test_id' => 2,
            ),
            5 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 6,
                'test_id' => 2,
            ),
            6 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 7,
                'test_id' => 2,
            ),
            7 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 8,
                'test_id' => 2,
            ),
            8 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 9,
                'test_id' => 3,
            ),
            9 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 10,
                'test_id' => 3,
            ),
            10 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 11,
                'test_id' => 3,
            ),
            11 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 12,
                'test_id' => 3,
            ),
            12 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 13,
                'test_id' => 12,
            ),
            13 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 14,
                'test_id' => 12,
            ),
            14 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 15,
                'test_id' => 12,
            ),
            15 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 16,
                'test_id' => 12,
            ),
            16 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 17,
                'test_id' => 13,
            ),
            17 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 18,
                'test_id' => 13,
            ),
            18 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 19,
                'test_id' => 13,
            ),
            19 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 20,
                'test_id' => 13,
            ),
            20 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 1,
                'test_id' => 14,
            ),
            21 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 2,
                'test_id' => 14,
            ),
            22 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 3,
                'test_id' => 14,
            ),
            23 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 4,
                'test_id' => 14,
            ),
            24 => 
            array (
                'answer' => 1,
                'deleted_at' => NULL,
                'question_id' => 5,
                'test_id' => 15,
            ),
            25 => 
            array (
                'answer' => 2,
                'deleted_at' => NULL,
                'question_id' => 6,
                'test_id' => 15,
            ),
            26 => 
            array (
                'answer' => 3,
                'deleted_at' => NULL,
                'question_id' => 7,
                'test_id' => 15,
            ),
            27 => 
            array (
                'answer' => 4,
                'deleted_at' => NULL,
                'question_id' => 8,
                'test_id' => 15,
            ),
        ));
    }
}
