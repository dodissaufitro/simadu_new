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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('rusun_id')->nullable()->after('id')->constrained('rusuns')->onDelete('cascade');
            $table->foreignId('tower_id')->nullable()->after('rusun_id')->constrained('towers')->onDelete('cascade');
            $table->foreignId('lantai_id')->nullable()->after('tower_id')->constrained('lantais')->onDelete('cascade');
            $table->foreignId('unit_id')->nullable()->after('lantai_id')->constrained('units')->onDelete('cascade');
            // $table->foreign('rusun_id')
            //     ->references('id')
            //     ->on('rusuns')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
