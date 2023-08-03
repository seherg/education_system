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
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id')->from(303030)->unique();
            $table->string('identity_number');
            $table->string('name');
            $table->string('surname');
            $table->string('phone_number');
            $table->string('email');  
            $table->string('password');
            $table->enum('gender',['male','female']);
            $table->date('birth_date');
            $table->string('address');
            $table->string('is_active');
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
