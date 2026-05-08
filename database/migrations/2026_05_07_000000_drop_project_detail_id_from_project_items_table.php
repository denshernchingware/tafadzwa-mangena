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
        if (! Schema::hasColumn('project_items', 'project_detail_id')) {
            return;
        }

        Schema::table('project_items', function (Blueprint $table) {
            $table->dropForeign(['project_detail_id']);
            $table->dropColumn('project_detail_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('project_items', 'project_detail_id')) {
            return;
        }

        Schema::table('project_items', function (Blueprint $table) {
            $table->foreignId('project_detail_id')->constrained()->onDelete('cascade');
        });
    }
};