<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->enum('day', ['пн','вт','ср','чт','пт','сб','вс']);
            $table->string('time');
            $table->timestamps();
        });
    }

    public function down(): void{Schema::dropIfExists('schedules');}
};
