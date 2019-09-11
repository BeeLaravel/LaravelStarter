<?php
namespace App\Models\Tacit;

class Test extends Model {
    protected $table = 'tacit_tests';
    protected $fillable = ['test_id', 'created_by'];
    protected $appends = [
        'percent',
    ];

    // ### 关联
    public function creater() { // 创建人 一对多 反向
        return $this->belongsTo('App\Models\Mini\User', 'created_by');
    }
    public function questions() { // 题目 多对多
        return $this->belongsToMany('App\Models\Tacit\Question', 'tacit_test_question')->withPivot('answer');
    }
    public function original() { // 原始测试 一对多 反向
        return $this->belongsTo('App\Models\Tacit\Test', 'test_id');
    }
    public function tests() { // 关联测试 一对多
        return $this->hasMany('App\Models\Tacit\Test');
    }

    // ### 属性
    public function getPercentAttribute() { // 百分比
        $percent = 0;

        if ( $this->test_id ) {
            $current = TestQuestion::where('test_id', $this->id)->pluck('answer', 'question_id');
            $original = TestQuestion::where('test_id', $this->test_id)->pluck('answer', 'question_id');

            foreach ( $original as $question_id => $value ) {
                if ( isset($current[$question_id]) && ($current[$question_id] == $original[$question_id]) ) $percent += 10;
            }
        }

        return $percent;
    }
}
