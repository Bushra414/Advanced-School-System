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
        Schema::create('students', function (Blueprint $table) {
            $table->id('SID');
            $table->string('fullname');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->integer('phone_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('parents_phone_number');
            $table->string('class', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
