<?php
namespace App\Models\Tacit;

class Test extends Model {
    protected $table = 'tacit_tests';

    public function questions() { // 题目 多对多
        return $this->belongsToMany('App\Models\Tacit\Question', 'tacit_test_question');
    }
    public function original() { // 原始测试 一对多 反向
        return $this->belongsTo('App\Models\Tacit\Test', 'test_id', 'id');
    }
    public function tests() { // 关联测试 一对多
        return $this->hasMany('App\Models\Tacit\Test', 'test_id', 'id');
    }
}
