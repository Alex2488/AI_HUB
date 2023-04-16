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
        Schema::create('service_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();


            $table->foreign('service_id')
                ->references('id')->on('services')->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');




/*            $table->foreign('service_id')->references('id')->on('services');

            $table->bigIncrements('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');*/



//            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
//            $table->foreignId('tag_id')->constrained('tags')->cascadeOnDelete();
//            $table->timestamps();
//
//            $table->index('service_id', 'sgl_service-idx');
//            $table->index('tag_id', 'sgl_tag-idx');
//
//            $table->foreign('service_id', 'sgl_service_fk')->on('services')->references('id');
//            $table->foreign('tag_id', 'sgl_tag_fk')->on('tags')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_tags');
    }
};
