<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonFrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_frases', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->comment('标识');
            $table->string('content')->comment('内容');

            $table->unsignedTinyInteger('sort')->default('255')->comment('排序');
            $table->unsignedInteger('created_by')->comment('创建人');
            $table->timestamps();
            $table->softDeletes();
            // slug 普通索引 idx_slug
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_frases');
    }
}
