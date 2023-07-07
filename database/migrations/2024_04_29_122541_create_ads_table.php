<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('last_name');

            $table->string('email');
            $table->string('phone');

            $table->integer('salary')->nullable();

            $table->boolean('own_instrument')->nullable();
            $table->boolean('ready_to_move')->nullable();
            $table->boolean('ready_to_tour')->nullable();

            $table->boolean('own_music')->nullable();
            $table->boolean('cover_band')->nullable();
            $table->boolean('commercial_project')->nullable();

            $table->string('band_name')->nullable();

            $table->string('vk');
            $table->string('youtube');
            $table->text('description')->nullable();


            $table->string('own_experience');
            $table->string('own_concert_experience');

            $table->string('applicant_experience');
            $table->string('applicant_concert_experience');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->string('status');

            $table->string('type');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
