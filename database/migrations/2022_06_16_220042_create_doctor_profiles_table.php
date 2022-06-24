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
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->string('name',50);
            $table->string('email',100);
            $table->string('number',12);
            $table->string('experience',10);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->string('profile_photo',200);
            $table->string('addhar_number',20);
            $table->string('addhar_photo',200);
            $table->string('lisence_no',50);
            $table->string('lisence_photo',200);
            $table->string('prescription',200);
            $table->string('address');
            $table->string('description');
            $table->integer('fees');
            $table->unsignedInteger('status')->default(0);
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
        Schema::dropIfExists('doctor_profiles');
    }
};
