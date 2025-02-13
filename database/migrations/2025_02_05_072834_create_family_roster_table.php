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
        Schema::create('family_rosters', function (Blueprint $table) {
            $table->string('REGION');
            $table->string('PROVINCE');
            $table->string('MUNICIPALITY');
            $table->string('BARANGAY');
            $table->string('GEOCODE');
            $table->string('HH_ID');
            $table->string('ENTRY_ID');
            $table->string('FIRST_NAME');
            $table->string('MIDDLE_NAME');
            $table->string('LAST_NAME');
            $table->string('EXT_NAME');
            $table->string('BIRTHDAY');
            $table->string('SEX');
            $table->integer('AGE');
            $table->integer('AGE_ON_HEALTH');
            $table->integer('AGE_ON_EDUC');
            $table->string('CLIENT_STATUS');
            $table->string('CS_CATEGORY');
            $table->string('MEMBER_STATUS');
            $table->string('MS_CATEGORY');
            $table->string('RELATION_TO_HH_HEAD');
            $table->string('CIVIL_STATUS');
            $table->string('GRANTEE');
            $table->string('REGISTRATION_STATUS');
            $table->string('HH_SET');
            $table->string('GRADE_LEVEL');
            $table->string('ATTEND_SCHOOL');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
