<?php
namespace App\Models\Tacit;

class Test extends Model {
    protected $table = 'tacit_tests';
    protected $fillable = ['test_id', 'created_by'];

    public function questions() { // 题目 多对多
        return $this->belongsToMany('App\Models\Tacit\Question', 'tacit_test_question')->withPivot('answer');
    }
    public function original() { // 原始测试 一对多 反向
        return $this->belongsTo('App\Models\Tacit\Test');
    }
    public function tests() { // 关联测试 一对多
        return $this->hasMany('App\Models\Tacit\Test');
    }
    public function creater() { // 创建人 一对多 反向
        return $this->belongsTo('App\Models\Mini\User', 'created_by');
    }
}
