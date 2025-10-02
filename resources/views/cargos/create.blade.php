@extends('layouts.app')

@section('title', 'Novo Cargo')

@section('content')
    <h1>Novo Cargo</h1>
    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cargos.index') }}" class="btn">Voltar</a>
    </form>
@endsection