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
    Schema::create('donors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('contact_number', 20);
        $table->string('email')->unique();
        $table->integer('age');
        $table->enum('sex', ['Male','Female','Other']);
        $table->string('address')->nullable();
        $table->enum('blood_type', ['A+','A-','B+','B-','AB+','AB-','O+','O-']);
        $table->date('last_donated')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
