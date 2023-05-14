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
            $table->timestamp('birthday');

            $table->string('email');
            $table->string('phone');

            $table->integer('salary');

            $table->string('own_experience');
            $table->string('own_concert_experience');

            $table->string('applicant_experience');
            $table->string('applicant_concert_experience');

            $table->boolean('own_instrument');
            $table->boolean('ready_to_move');
            $table->boolean('ready_to_tour');

            $table->boolean('own_music');
            $table->boolean('cower_band');
            $table->boolean('commercial_project');

            $table->string('group_name');

            $table->string('vk');
            $table->string('youtube');
            $table->string('description');
            $table->string('additional_info');

            $table->integer('age_from');
            $table->integer('age_to');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');

            $table->string('type');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
