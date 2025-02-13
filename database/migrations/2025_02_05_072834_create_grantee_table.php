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
        Schema::create('grantees', function (Blueprint $table) {
            $table->string('REGION');
            $table->string('PROVINCE');
            $table->string('MUNICIPALITY');
            $table->string('BARANGAY');
            $table->string('PUROK');
            $table->string('DISTRICT');
            $table->string('GEOCODE');
            $table->string('GIDA_AREA');
            $table->string('URBAN_RURAL');
            $table->string('HH_ID');
            $table->string('ENTRY_ID');
            $table->string('FIRST_NAME');
            $table->string('MIDDLE_NAME');
            $table->string('LAST_NAME');
            $table->string('EXT_NAME');
            $table->string('MAIDEN_NAME');
            $table->string('CONTACT_NUMBER');
            $table->string('BIRTHDAY');
            $table->integer('AGE');
            $table->string('SEX');
            $table->string('CLIENT_STATUS');
            $table->string('CS_CODE');
            $table->string('CS_CATEGORY');
            $table->string('MEMBER_STATUS');
            $table->string('MS_CODE');
            $table->string('RELATION_TO_HH');
            $table->string('REL_CODE');
            $table->string('HH_SET');
            $table->string('SET_GROUP');
         
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
