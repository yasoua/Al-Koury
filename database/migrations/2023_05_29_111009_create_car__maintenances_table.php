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
        Schema::create('car__maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maintenance_id')->nullable();
            $table->foreign('maintenance_id')->references('id')->on('maintenance__types')->onDelete('set null')->onUpdate('cascade');
            $table->date('date');
            $table->date('expected_next_maintenance_date');
            $table->string('expected_next_maintenance_km');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('car__maintenances', function (Blueprint $table) {
            $table->dropForeign('added_by');
            $table->dropForeign('last_updated_by');
            $table->dropForeign('maintenance_id');

        });

        Schema::dropIfExists('car__maintenances');
    }

};
