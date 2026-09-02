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
        Schema::table('complaints', function (Blueprint $table) {
            $table->foreignId('tower_id')->nullable()->constrained('towers')->onDelete('cascade');
            $table->foreignId('koor_id')->nullable()->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complaints', function (Blueprint $table) {
            $table->dropForeign(['tower_id']);
            $table->dropColumn('tower_id');
            $table->dropForeign(['koor_id']);
            $table->dropColumn('koor_id');
        });
    }
};
