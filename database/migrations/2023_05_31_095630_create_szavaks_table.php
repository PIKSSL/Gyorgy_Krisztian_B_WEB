<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string("angol");
            $table->string("magyar");
            $table->foreignId("temaId")->references("id")->on("temas");
            $table->timestamps();
        });

        Szavak::create(['angol'=>"Zebra",'magyar'=>'Zebra',"temaId"=>1]);
        Szavak::create(['angol'=>"Lion",'magyar'=>'Oroszlán',"temaId"=>1]);
        Szavak::create(['angol'=>"Ivy",'magyar'=>'Borostyán',"temaId"=>2]);
        Szavak::create(['angol'=>"Violet",'magyar'=>'Ibolya',"temaId"=>2]);
        Szavak::create(['angol'=>"Keyboard",'magyar'=>'Billentyűzet',"temaId"=>3]);
        Szavak::create(['angol'=>"Bag",'magyar'=>'Táska',"temaId"=>3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
