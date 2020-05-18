<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> unsignedBigInteger('user_id');
            $table ->string('title');
            $table ->string('text');
            $table->timestamp('created_at');

        });
    }

    /**
     * Reverse the migrationss.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
