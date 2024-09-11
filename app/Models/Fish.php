<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    /**
     * FISH ATTRIBUTES
     * $this->attributes['id'] - int - contiene la clave primaria (id) del pez
     * $this->attributes['name'] - string - contiene el nombre del pez
     * $this->attributes['species'] - string - contiene la especie del pez
     * $this->attributes['weight'] - float - contiene el peso del pez
     */
    protected $table = 'fishes';

    protected $fillable = ['name', 'species', 'weight'];

    // Métodos getters y setters para cada atributo del modelo

    // ID
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    // Nombre
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    // Especie
    public function getSpecies(): string
    {
        return $this->attributes['species'];
    }

    public function setSpecies(string $species): void
    {
        $this->attributes['species'] = $species;
    }

    // Peso
    public function getWeight(): float
    {
        return $this->attributes['weight'];
    }

    public function setWeight(float $weight): void
    {
        $this->attributes['weight'] = $weight;
    }

    // Si en el futuro tienes relaciones, puedes agregar métodos como:
    // public function comments(): HasMany {}
}
