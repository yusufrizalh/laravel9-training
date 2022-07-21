<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();               // bigint, primary key, auto_increment
            $table->string('name');     // varchar
            $table->text('address');    // text
            $table->timestamps();       // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
