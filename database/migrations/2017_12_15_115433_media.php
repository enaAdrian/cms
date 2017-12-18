<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Media extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medias', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('link');
        $table->string('image')->nullable();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('medias', function (Blueprint $table) {
          $table->dropColumn('image');
      });
    }
}
