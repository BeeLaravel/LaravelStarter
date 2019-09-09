<?php
namespace App\Models\Tacit;

class Question extends Model {
    protected $table = 'tacit_questions';
    protected $appends = [
        'choiceArray',
    ];

    // ### 关联
    public function tests() { // 测试 多对多
        return $this->belongsToMany('App\Models\Tacit\Test', 'tacit_test_question');
    }
    public function creater() { // 创建人 一对多 反向
        return $this->belongsTo('App\User', 'created_by');
    }

    // ### 属性
    public function getChoiceArrayAttribute() { // 选项
        return explode("\r\n", $this->choices);
    }
}
