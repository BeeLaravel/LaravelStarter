<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacitTestQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacit_test_question', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('test_id')->comment('测试标识');
            $table->unsignedInteger('question_id')->comment('题目标识');
            $table->unsignedTinyInteger('answer')->comment('答案');
            $table->unsignedTinyInteger('lock')->comment('是否解锁');

            $table->softDeletes();
            // test_id 普通索引 idx_test_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tacit_test_question');
    }
}
