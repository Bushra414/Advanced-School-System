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
    Schema::create('teachers', function (Blueprint $table) {
        $table->id('TID');
        $table->string('full_name');
        $table->date('date_of_birth');
        $table->string('phone_number');
        $table->string('email');
        $table->string('class', 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
