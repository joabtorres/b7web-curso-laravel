<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo!</title>
</head>
<body>
    <h1>Bem-vindo! {{$user->firstName}} {{$user->lastName}}</h1>
    <p>Idade:{{$user->age}} anos</p>
    <p>Email:{{$user->email}} </p>
</body>
</html>