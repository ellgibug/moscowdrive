<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 20);
            $table->string('name', 50);
            $table->string('phone', 20);
            $table->string('message', 255)->nullable();
            $table->dateTime('created_at');
            $table->string('admin_comment', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_forms');
    }
}
