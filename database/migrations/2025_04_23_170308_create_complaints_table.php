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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rusun_id')->nullable()->constrained('rusuns')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('user_verified')->nullable()->constrained('users')->onDelete('cascade');
            $table->text('complaint');
            $table->text('photo1');
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->enum('status',['accept','finish','request','deny','re-schedule'])->nullable();
            $table->date('tanggal_eksekusi')->nullable();
            $table->text('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
