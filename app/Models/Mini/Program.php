<?php
namespace App\Models\Mini;

class Program extends Model {
    protected $table = 'mini_programs';

    public function creater() { // 创建人 一对多 反向
        return $this->belongsTo('App\User', 'created_by');
    }
}
