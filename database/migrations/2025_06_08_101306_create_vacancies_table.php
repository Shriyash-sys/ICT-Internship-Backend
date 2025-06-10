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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->string('category');
            $table->string('location');
            $table->string('experience');
            $table->string('stipend');
            $table->integer('openings');
            $table->date('application_deadline');
            $table->text('description');
            $table->string('responsibility')->nullable();
            $table->string('requirement')->nullable();
            $table->string('skills')->nullable();
            $table->string('seo_title');
            $table->string('seo_description')->nullable();
            $table->string('seo_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
