<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id()->comment('唯一編號');
            $table->unsignedBigInteger('author_id')->comment('作者');
            $table->unsignedBigInteger('category_id')->comment('分類');
            $table->string('title', 128)->comment('標題');
            $table->string('subtitle', 128)->nullable()->comment('子標題');
            $table->text('cover')->comment('封面內容');
            $table->text('content')->comment('文章內容');
            $table->unsignedInteger('views')->default(0)->comment('觀看次數');
            $table->timestamp('created_at')->useCurrent()->comment('建立時間');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新時間');

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
