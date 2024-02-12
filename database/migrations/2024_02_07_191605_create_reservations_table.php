<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
        public function up()
        {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('phone_number');
                $table->integer('number_of_guests');
                $table->date('date');
                $table->string('time');
                $table->string('time_of_day')->nullable();
                $table->timestamps();
            });
        }
        
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
