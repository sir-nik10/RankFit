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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('deleted');
            $table->string('name');
            $table->integer('team_id');
            $table->string('description');
            $table->integer('user_id');
            $table->tinyInteger('processed');
            $table->string('path');
            $table->string('ext');
            $table->string('media_type');
            $table->tinyInteger('private');

            $table->primary('id');
            $table->index(['name', 'processed','ext','description','id']);
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('user_id');
            $table->tinyInteger('deleted');
            $table->string('comment');

            $table->primary('id');
        });

        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('poster_id');
            $table->integer('voter_id');
            $table->tinyInteger('deleted');
            
            $table->primary('id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
        Schema::dropIfExists('comment');
        Schema::dropIfExists('votes');
    }
};
