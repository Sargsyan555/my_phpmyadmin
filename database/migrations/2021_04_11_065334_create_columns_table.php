<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columns', function (Blueprint $table) {
            $table->id();
            $table->string('table');
            $table->string('db');
            $table->string('field_name');
            $table->string('field_type');
            $table->integer('field_length')->nullable();
            $table->string('field_default')->nullable();
            $table->string('field_collation')->nullable();
            $table->string('field_attributes')->nullable();
            $table->string('field_null')->nullable();
            $table->string('field_index')->nullable();
            $table->string('field_a_l')->nullable();
            $table->string('field_comments')->nullable();
            $table->string('field_virtuality')->nullable();
            $table->string('field_move_column')->nullable();
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
        Schema::dropIfExists('columns');
    }
}
