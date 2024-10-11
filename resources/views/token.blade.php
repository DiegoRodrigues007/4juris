<!-- resources/views/token.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token de Acesso</title>
</head>

<body>
    <h1>Seu Token de Acesso</h1>
    <p>Aqui está o seu token:</p>
    <pre>{{ $token }}</pre>

    <p>Use este token para acessar a API autenticada.</p>
</body>

</html>