<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo!</title>
</head>

<body>
    <h1>Bem-vindo! {{ $user->firstName }} {{ $user->lastName }}</h1>
    <p>Idade:{{ $user->age }} anos</p>
    <p>Email:{{ $user->email }} </p>

    <hr>

    <p>Codigo em html: {{ $html }}</p>
    <p>Codigo interpretado em html: {!! $html !!}</p>

    <p>Chamando função: {{-- funcao() --}}, só retona valor (int, double, string)</p>

    <hr>

    <h2>utilizando condições</h2>
    <p>{{ $user->firstName }} == Ricardo</p>
    <h4>Ternário: {{ $user->firstName == 'Ricardo' ? 'Sim' : 'Não' }}</h4>

    <h4>if...else</h4>
    @if ($user->firstName == 'Ricardo')
        <p>Sim</p>
    @else
        <p>Não</p>
    @endif

    <h4>if... esleif... else...endif</h4>
    @if ($user->age < 18)
        <p> Menor de 18 anos</p>
    @elseif ($user->age >= 18 && $user->age <= 30)
        <p> Maior igual a 18 anos e menor igual a 30 anos</p>
    @else
        <p> maior que 30 anos</p>
    @endif


    <hr>
    <h1>Laços de repetição</h1>
    <p>FOR: for .... endfor</p>
    @for ($i = 0; $i < 10; $i++)
        <span>{{ $i }}</span>
    @endfor

    <p>foreach: foreach ... endforech</p>
    @foreach ($users as $userItem)
        <p>Nome: {{ $userItem->firstName }} {{ $userItem->lastName }}</p>
        <p>Idade: {{ $userItem->age }} </p>
    @endforeach

    <hr>
    <h1>Utilizando componentes</h1>
    @foreach ($users as $userItem)
        @component('components.user-list')
            @slot('firstName')
                {{ $userItem->firstName }}
            @endslot
            @slot('lastName')
                {{ $userItem->lastName }}
            @endslot
            @slot('age')
                {{ $userItem->age }}
            @endslot
        @endcomponent
    @endforeach
</body>

</html>
