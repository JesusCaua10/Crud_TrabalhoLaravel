<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Novo Cargo</h1>
    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" step="0.01" required>

        <button type="submit">Salvar</button>

</body>
</html>