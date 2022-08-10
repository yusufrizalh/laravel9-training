<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_skill', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('skill_id')->constrained('skills');
            $table->primary(['employee_id', 'skill_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_skill');
    }
};
