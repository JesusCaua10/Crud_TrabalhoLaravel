@extends('layouts.app')

@section('title', 'Editar Cargo')

@section('content')
    <h1>Editar Cargo</h1>
    <form action="{{ route('cargos.update', $cargo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $cargo->nome }}" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" step="0.01" value="{{ $cargo->salario }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('cargos.index') }}" class="btn">Voltar</a>
    </form>
@endsection