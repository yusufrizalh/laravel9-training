<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();                   // bigint, primary key, auto_increment
            $table->string('name', 50);     // varchar(50)
            $table->text('address');        // text
            $table->boolean('status')->default(false);  // true or false
            $table->timestamps();           // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
