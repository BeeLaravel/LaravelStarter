<?php
namespace App\Models\Tacit;

class Question extends Model {
    protected $table = 'tacit_questions';

    public function tests() { // 测试 多对多
        return $this->belongsToMany('App\Models\Tacit\Test', 'tacit_test_question');
    }
}
