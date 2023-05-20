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
        Schema::create('payments_table', function (Blueprint $table) {
            $table->id();
            $table->string('Image');
            $table->string('Tenant');
            $table->string('Building');
            $table->string('RoomNo');
            $table->string('Amount');
            $table->string('Date');
            $table->string('Month');
            $table->string('Holder1');
            $table->string('Holder2');
            $table->string('Holder3');
            $table->string('Holder4');
            $table->string('Holder5');
            $table->string('Holder6');
            $table->string('Holder7');
            $table->string('Holder8');
            $table->string('Holder9');
            $table->string('Holder10');
            $table->string('Holder11');
            $table->string('Holder12');
            $table->string('Holder13');
            $table->string('Holder14');
            $table->string('Holder15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_table');
    }
};
