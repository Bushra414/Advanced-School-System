<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassesTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_classes', function (Blueprint $table) {
            $table->primary(['TID', 'CID']);
            $table->foreignId('TID')->references('TID')->on('teachers')->onDelete('cascade');
            $table->foreignId('CID')->references('CID')->on('classes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_classes');
    }
}
