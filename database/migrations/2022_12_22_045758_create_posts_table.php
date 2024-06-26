<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
    function up()
    {
        Schema::create( 'posts', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'title' );
            $table->text( 'details' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    function down()
    {
        Schema::dropIfExists( 'posts' );
    }
};