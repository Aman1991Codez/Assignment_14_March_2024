<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcdonaldsLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('mcdonalds_locations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('domain');
            $table->string('displayed_link');
            $table->text('snippet');
            $table->boolean('prerender');
            $table->integer('block_position');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mcdonalds_locations');
    }
}
