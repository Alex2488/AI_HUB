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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('logo');
            $table->string('image');
            $table->string('link_to_service');
            $table->foreignId('category_id');
            $table->text('excerpt');
            $table->text('information_1');
            $table->text('information_2');
            $table->text('information_3');
            $table->text('functionality_1');
            $table->text('functionality_2');
            $table->text('functionality_3');
            $table->text('functionality_4');
            $table->text('benefits_1');
            $table->text('benefits_2');
            $table->text('benefits_3');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
