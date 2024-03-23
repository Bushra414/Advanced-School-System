<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('marks', function (Blueprint $table) {
        $table->id('MID');
        $table->foreignId('SID')->references('SID')->on('students')->constrained()->onDelete('cascade');
        $table->foreignId('SubID')->references('SubID')->on('subjects')->constrained()->onDelete('cascade');
        $table->integer('marks');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
