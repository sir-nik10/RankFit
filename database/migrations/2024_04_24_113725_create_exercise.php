<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercise', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('deleted');
            $table->string('name');
            $table->string('type');
            $table->string('unit');
            $table->string('description');

            //$table->primary('id');

        });

        Schema::create('log', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('deleted');
            $table->tinyInteger('private');
            $table->string('user_id');
            $table->integer('exercise_id');
            $table->string('type');
            $table->string('name');
            $table->integer('measurement');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise');
        Schema::dropIfExists('log');
    }
};
