<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->comment('唯一編號');
            $table->string('name')->unique()->comment('分類名稱');
            $table->string('img')->nullable()->comment('分類圖片');
            $table->integer('sort')->default(0)->comment('排序');
            $table->timestamp('created_at')->useCurrent()->comment('建立時間');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
