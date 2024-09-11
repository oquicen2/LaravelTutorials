@extends('layouts.app')

@section('title', 'Registrar Peces')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Registrar Pez</div>
        <div class="card-body">

          @if($errors->any())
          <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif

          <form method="POST" action="{{ route('parcial1.saveFish') }}">
            @csrf
            <div class="form-group mb-2">
              <label for="name">Nombre del Pez</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Introduce el nombre" value="{{ old('name') }}" required>
            </div>

            <div class="form-group mb-2">
              <label for="species">Especie</label>
              <select class="form-control" id="species" name="species" required>
                <option value="">Selecciona la especie</option>
                <option value="Sapo Perro" {{ old('species') == 'Sapo Perro' ? 'selected' : '' }}>Sapo Perro</option>
                <option value="Cabezón" {{ old('species') == 'Cabezón' ? 'selected' : '' }}>Cabezón</option>
              </select>
            </div>

            <div class="form-group mb-2">
              <label for="weight">Peso (kg)</label>
              <input type="number" step="0.01" class="form-control" id="weight" name="weight" placeholder="Introduce el peso" value="{{ old('weight') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
