@extends('layouts.app')

@section('title', 'Estadísticas de Peces')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Estadísticas de Peces</div>
        <div class="card-body">

          <h4>Cantidad de peces por especie</h4>
          <ul class="list-group mb-4">
            @foreach($speciesCount as $species)
              <li class="list-group-item">
                {{ $species->species }}: {{ $species->total }} pez/peces
              </li>
            @endforeach
          </ul>

          <h4>Peso máximo registrado</h4>
          <p class="alert alert-info">
            El pez más pesado registrado pesa: {{ $maxWeight }} kg.
          </p>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
