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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable(); // Added phone number
            $table->string('email');
            $table->enum('shipment_type', ['By Air', 'By Ship', 'By Road']);
            $table->string('city_departure');
            $table->string('delivery_city');
            $table->enum('incoterms', ['EXW', 'FCA', 'FOB', 'CIF', 'DAP', 'DDP']);
            $table->decimal('weight', 8, 2);
            $table->decimal('height', 8, 2);
            $table->decimal('width', 8, 2);
            $table->decimal('length', 8, 2);
            $table->boolean('express_delivery')->default(false);
            $table->boolean('insurance')->default(false);
            $table->boolean('packaging')->default(false);
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('current_location_longitude', 9, 6)->nullable();
            $table->decimal('current_location_latitude', 9, 6)->nullable();
            $table->string('current_location')->nullable();
            $table->string('tracking_id')->unique();
            $table->enum('status', ['Pending', 'In Transit', 'Delivered', 'Canceled'])->default('Pending');
            $table->integer('box')->default(1); // Retained for boxes
            $table->text('package_content')->nullable(); // Retained for package details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
