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
            $table->foreignId('rusun_id')->after('id')->nullable()->constrained('rusuns')->onDelete('cascade');
            $table->foreignId('tower_id')->after('rusun_id')->nullable()->constrained('towers')->onDelete('cascade');
            $table->foreignId('lantai_id')->after('tower_id')->nullable()->constrained('lantais')->onDelete('cascade');
            $table->foreignId('unit_id')->after('lantai_id')->nullable()->constrained('units')->onDelete('cascade');
            $table->text('image')->nullable()->after('name');
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
