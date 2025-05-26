<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
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
            $table->foreignId('tower_id')->constrained('towers')->onDelete('cascade');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('koor_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->text('complaint');
            $table->text('photo1');
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->enum('status',['accept','finish','proses','request','deny','pending','completed'])->default('request');
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
