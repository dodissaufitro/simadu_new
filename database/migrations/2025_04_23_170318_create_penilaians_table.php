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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('complaint_id')->constrained('complaints')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating_layanan');
            $table->integer('rating_kualitas');
            $table->integer('rating_kecepatan');
            $table->text('komentar')->nullable();

            // $table->foreign('complaint_id')
            //     ->references('id')
            //     ->on('complaints')
            //     ->onDelete('cascade');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
