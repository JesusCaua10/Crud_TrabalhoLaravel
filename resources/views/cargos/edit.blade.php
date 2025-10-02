<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Editar Cargo</h1>
    <form action="{{ route('cargos.update', $cargo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $cargo->nome }}" required>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" step="0.01" value="{{ $cargo->salario }}" required>

        <button type="submit">Atualizar</button>

</body>
</html>