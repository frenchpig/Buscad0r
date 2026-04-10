<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('searcher_configs', function (Blueprint $table) {
            $table->id();
            $table->string('table_name')->unique();
            $table->integer('columns_per_row')->default(3);
            $table->timestamps();
        });

        Schema::create('searcher_fields', function (Blueprint $table) {
            $table->id();
            $table->string('table_name');
            $table->string('field_id'); // HTML id attribute mapping
            $table->string('label'); // UI Label
            $table->string('type')->default('text'); // text, number, etc.
            $table->integer('order')->default(0);    // For drag and drop sorting
            $table->boolean('is_visible')->default(true);
            $table->timestamps();

            $table->foreign('table_name')->references('table_name')->on('searcher_configs')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('searcher_fields');
        Schema::dropIfExists('searcher_configs');
    }
};
