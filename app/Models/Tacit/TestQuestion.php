<?php
namespace App\Models\Tacit;

class TestQuestion extends Model {
	public $timestamps = false;

    protected $table = 'tacit_test_question';
    protected $fillable = ['test_id', 'question_id', 'answer'];
}
