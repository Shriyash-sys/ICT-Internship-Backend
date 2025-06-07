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
        Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('logo')->nullable();
        $table->string('company_name');
        $table->string('category');
        $table->date('founded_date');
        $table->string('website')->nullable();
        $table->string('phone');
        $table->string('employees')->nullable();
        $table->string('street');
        $table->string('city');
        $table->string('state');
        $table->string('country')->default('Nepal');
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('instagram')->nullable();
        $table->text('description')->nullable();
        $table->json('photo')->nullable(); // Assuming 'photo' is an array of image paths
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
