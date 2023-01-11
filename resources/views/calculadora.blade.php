<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="/calcular" method="POST">
        @csrf
        <input name="num1">
        <input name="operador">
        <input name="num2">
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>