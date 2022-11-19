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
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('owner');
            $table->string('title');
            $table->longText('description');
            $table->integer('maxPresent');
            $table->enum('designedTo', ['Teachers', 'Students', 'Parents']);
            $table->date('date');
            $table->string('tags');
            $table->string('image')->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('forums');
    }
};
