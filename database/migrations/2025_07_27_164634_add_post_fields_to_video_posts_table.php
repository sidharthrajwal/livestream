<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('vedio_posts', function (Blueprint $table) {
            $table->string('post_title')->nullable();
            $table->text('post_description')->nullable();
            $table->text('post_tag')->nullable();
            $table->string('post_thumbnail')->nullable();
            $table->string('post_file_title')->nullable();
            $table->enum('post_status', ['draft', 'published', 'archived'])->default('draft');
        });
    }

    public function down()
    {
        Schema::table('vedio_posts', function (Blueprint $table) {
            $table->dropColumn([
                'post_title',
                'post_description',
                'post_tag',
                'post_thumbnail',
                'post_file_title',
                'post_status',
            ]);
        });
    }
};