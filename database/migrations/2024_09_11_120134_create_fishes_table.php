<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fishes', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable
            $table->string('name'); // Nombre del pez
            $table->enum('species', ['Sapo Perro', 'Cabezón']); // Especie del pez
            $table->decimal('weight', 8, 2); // Peso del pez
            $table->timestamps(); // Timestamps (created_at y updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fishes');
    }
};
