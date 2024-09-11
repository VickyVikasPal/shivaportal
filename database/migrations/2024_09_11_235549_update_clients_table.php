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
        Schema::table('clients', function (Blueprint $table) {
            // Add 'category' and 'reference_by' columns
            $table->string('category', 255)->nullable()->after('address');
            $table->string('reference_by', 255)->nullable()->after('category');

            // Drop 'pincode' column
            $table->dropColumn('pincode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            // Reverse the additions by dropping the columns
            $table->dropColumn(['category', 'reference_by']);
            
            // Re-add the 'pincode' column
            $table->string('pincode', 255)->nullable();
        });
    }
};
