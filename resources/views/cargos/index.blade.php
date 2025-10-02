@extends('layouts.app')

@section('title', 'Lista de Cargos')

@section('content')
    <h1>Cargos</h1>
    <a href="{{ route('cargos.create') }}" class="btn btn-success" style="margin-bottom: 15px;">Novo Cargo</a>
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Salário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->nome }}</td>
                    <td>R$ {{ number_format($cargo->salario, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn">Editar</a>
                        <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection