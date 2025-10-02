<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista de Cargos</h1>
        <a href="{{ route('cargos.create') }}">Adicionar Novo Cargo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Cargo</th>
                <th>Salário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->nome }}</td>
                    <td>{{ $cargo->salario }}</td>
                    <td>
                        <a href="{{ route('cargos.edit', $cargo->id) }}">Editar</a>
                    </td>    
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>