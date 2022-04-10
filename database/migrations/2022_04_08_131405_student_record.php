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
      Schema::create('students',function (Blueprint $add)
      {
        $add->id();
        $add->string('name')->require();
        $add->string('Email')->unique();
        $add->integer('Phone')->require();
        $add->string('Adress')->require();
        $add->string('class')->require();
        $add->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
