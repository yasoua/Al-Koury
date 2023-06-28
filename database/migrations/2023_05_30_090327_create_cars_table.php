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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->string('picture');
            $table->date('manufacturer_year');
            $table->string('rent_price')->nullable();
            $table->unsignedBigInteger('specification_ids')->nullable();
            $table->foreign('specification_ids')->references('id')->on('specifications')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null')->onUpdate('cascade');
            $table->string('plate_number')->nullable();
            $table->string('car_unique_id')->unique()->nullable();
            $table->unsignedBigInteger('plate_governorate_id')->nullable();
            $table->foreign('plate_governorate_id')->references('id')->on('governorates')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->text('note')->nullable();
            $table->string('current_km')->nullable();
            $table->string('needed_maintenance')->nullable();
            $table->string('rider');
            $table->boolean('four_wheel_drive');
            $table->string('engine_type');
            $table->string('gear_shift');
            $table->boolean('air_condition');
            $table->string('car_doors');
            $table->string('car_luggage_capacity');










            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign('specification_ids');
            $table->dropForeign('status_id');
            $table->dropForeign('plate_governorate_id');
            $table->dropForeign('added_by');
            $table->dropForeign('last_updated_by');
        });

        Schema::dropIfExists('cars');
    }

};
