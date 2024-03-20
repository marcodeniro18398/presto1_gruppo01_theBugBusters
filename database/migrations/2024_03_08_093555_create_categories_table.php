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
            ['name' => 'Elettronica', 'img' => 'media/Elettronica.jpg'], 
            ['name' => 'Libri', 'img' => 'media/Libri.jpg'],  
            ['name' => 'Motori', 'img' => 'media/Motori.jpg'], 
            ['name' => 'Arredamento', 'img' => 'media/Arredamento.jpg'],  
            ['name' => 'Immobili', 'img' => 'media/Immobili.jpg'], 
            ['name' => 'Sport', 'img' => 'media/Sport.jpg'], 
            ['name' => 'Orologi', 'img' => 'media/Orologi.jpg'], 
            ['name' => 'Moda', 'img' => 'media/Moda.jpg'], 
            ['name' => 'Strumenti musicali', 'img' => 'media/Strumenti Musicali.jpg'], 
            ['name' => 'Consulenze', 'img' => 'media/Consulenze.jpg'], 
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
