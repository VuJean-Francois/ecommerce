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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id : identifiant unique et auto-incrémenté du produit
            $table->string('image'); // image : adresse de l'image qui illustre le produit
            $table->string('name'); // name : nom du produit
            $table->decimal('price', 8, 2); // price : prix du produit avec 2 décimales
            $table->decimal('vat', 5, 2); // vat : taux de TVA appliqué à ce produit avec 2 décimales
            $table->text('description'); // description : description du produit
            $table->timestamps(); // colonnes created_at et updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
