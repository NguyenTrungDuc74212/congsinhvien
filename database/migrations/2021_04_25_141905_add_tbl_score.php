<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTblScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_score', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('hocphan');
            $table->tinyInteger('tinchi');
            $table->tinyInteger('diemx');
            $table->tinyInteger('diemy');
            $table->tinyInteger('diemz');
            $table->string('diemchu',30);
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
        Schema::dropIfExists('tbl_score');
    }
}
