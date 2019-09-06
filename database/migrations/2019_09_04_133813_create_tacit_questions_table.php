<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacitQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacit_questions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->comment('标题');
            $table->text('choices')->comment('选项');

            $table->unsignedTinyInteger('sort')->default('255')->comment('排序');
            $table->unsignedInteger('created_by')->comment('创建人');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tacit_questions');
    }
}
