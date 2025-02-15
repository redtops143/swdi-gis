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
        Schema::table('family_rosters', function (Blueprint $table) {
           
                $table->index('HH_ID');
                $table->index('REGION');
                $table->index('PROVINCE');
                $table->index('MUNICIPALITY');
                $table->index('FIRST_NAME');
                $table->unique('ENTRY_ID');
                $table->index('CLIENT_STATUS');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('family_rosters', function (Blueprint $table) {
            //
        });
    }
};
