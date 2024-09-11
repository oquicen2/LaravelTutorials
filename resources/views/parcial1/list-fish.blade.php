@extends('layouts.app')

@section('title', 'Listado de Peces')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Listado de Peces</div>
        <div class="card-body">
          @if(count($fishes) > 0)
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Peso (kg)</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fishes as $fish)
              <tr>
                <td>{{ $fish->id }}</td>

                {{-- Si la especie es "Cabezón", mostrar el nombre en negrita --}}
                <td class="{{ $fish->species == 'Cabezón' ? 'fw-bold' : '' }}">
                  {{ $fish->name }}
                </td>

                <td>{{ $fish->species }}</td>

                {{-- Si la especie es "Sapo Perro", mostrar el peso en azul --}}
                <td class="{{ $fish->species == 'Sapo Perro' ? 'text-primary' : '' }}">
                  {{ $fish->weight }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <div class="alert alert-warning">No hay peces registrados en este momento.</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
