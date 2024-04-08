<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonkonyvTable extends Migration
{
    
    public function up(): void
    {
        Schema::create('telefonkonyv', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->string('email')->unique();
            $table->string('telefonszam')->nullable();
            $table->string('lakcim');
            $table->string('levelezesicim')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('telefonkonyv');
    }
}
