<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });

        $categories = [
            ['name' => 'Elettronica', 'img' => 'media/Elettronica.webp'], 
            ['name' => 'Libri', 'img' => 'media/Libri.webp'],  
            ['name' => 'Motori', 'img' => 'media/Motori.webp'], 
            ['name' => 'Arredamento', 'img' => 'media/Arredamento.webp'],  
            ['name' => 'Immobili', 'img' => 'media/Immobili.webp'], 
            ['name' => 'Sport', 'img' => 'media/Sport.webp'], 
            ['name' => 'Orologi', 'img' => 'media/Orologi.webp'], 
            ['name' => 'Moda', 'img' => 'media/Moda.webp'], 
            ['name' => 'Strumenti musicali', 'img' => 'media/Strumenti_Musicali.webp'], 
            ['name' => 'Consulenze', 'img' => 'media/Consulenze.webp'], 
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category['name'], 'img' => $category['img']]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
