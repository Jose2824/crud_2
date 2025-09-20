@extends('layouts.app')

@section('content')
<h1 class="mb-3">Cadastrar Carro</h1>

<form action="{{ route('carros.store') }}" method="POST" class="card p-3 shadow-sm">
    @csrf
    <div class="mb-3">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" value="{{ old('modelo') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control" value="{{ old('placa') }}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
