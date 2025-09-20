@extends('layouts.app')

@section('content')
<h1 class="mb-3">Editar Carro</h1>

<form action="{{ route('carros.update', $carro->id) }}" method="POST" class="card p-3 shadow-sm">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" value="{{ $carro->modelo }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control" value="{{ $carro->placa }}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
