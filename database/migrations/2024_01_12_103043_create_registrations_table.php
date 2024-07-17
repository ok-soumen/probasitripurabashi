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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('randomid');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('pin');
            $table->string('current_address');
            $table->string('current_district');
            $table->string('current_city');
            $table->string('current_pin');
            $table->string('roots');
            $table->string('occupation');
            $table->string('nature_occupation');
            $table->string('industry_occupation');
            $table->string('last_visited');
            $table->string('reason_moving');
            $table->string('time_visit');
            $table->string('govt_should');
            $table->string('solve_existing');
            $table->string('things_refer_outside');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
