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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('deleted');
            $table->string('name');
            $table->string('type',25);
            $table->integer('user_id');
            $table->tinyInteger('original');
            $table->integer('team_id');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');

            //$table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
