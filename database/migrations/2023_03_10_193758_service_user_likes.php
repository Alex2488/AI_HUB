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


            Schema::create('service_user_likes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
                $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
                $table->timestamps();

                $table->index('service_id', 'sul_service-idx');
                $table->index('user_id', 'sul_user-idx');

                $table->foreign('service_id', 'sul_service_fk')->on('services')->references('id');
                $table->foreign('user_id', 'sul_user_fk')->on('users')->references('id');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_user_likes');
    }
};
