<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiniProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_programs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->comment('标识');
            $table->string('title')->comment('标题');
            $table->string('logo')->comment('图标');
            $table->string('description')->comment('描述');
            $table->string('share_image')->comment('分享图片');
            $table->string('share_title')->comment('分享标题');
            $table->string('share_cover')->comment('分享图片');
            $table->string('customer_service_wechat')->comment('客服微信');

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
        Schema::dropIfExists('mini_programs');
    }
}
