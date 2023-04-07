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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->integer('organization_id');
            $table->integer('assigned_to');
            $table->string('title');
            $table->text('description');
            $table->string('type');
            $table->string('manufactured_by');
            $table->string('model');
            $table->string('serial_no');
            $table->string('address');
            $table->date('purchase_date');
            $table->date('last_maintenance_date');
            $table->string('condition');              
            $table->timestamps();
            $table->index('organization_id');
            $table->index('assigned_to');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
