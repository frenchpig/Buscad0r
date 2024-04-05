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
        Schema::table('data_loteria', function (Blueprint $table) {
            $table->string('RANGO_DE_IP_DHCP_2')->nullable()->after('RANGO_DE_IP_DHCP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_loteria', function (Blueprint $table) {
            //
        });
    }
};
