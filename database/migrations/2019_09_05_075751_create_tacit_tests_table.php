<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacitTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacit_tests', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('test_id')->default(0)->comment('测试标识');

            $table->unsignedInteger('created_by')->comment('创建人');
            $table->timestamps();
            $table->softDeletes();
            // test_id 普通索引 idx_test_id
            // created_by 普通索引 idx_creator
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tacit_tests');
    }
}
