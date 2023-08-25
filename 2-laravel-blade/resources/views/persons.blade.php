<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Pessoas</title>
    <style>
        body {
            display: flex;
            justify-content: center
        }

        .person {
            display: flex;
            flex-direction: column;
            width: 300px;
            padding: 5px;
            background-color: #cccccc;
            margin: 5px;
        }

        .person * {
            margin: 0;
        }
    </style>
</head>

<body>
    @foreach ($users as $user)
        @component('components.person')
            @slot('name')
                {{ $user['name'] }}
            @endslot
            @slot('image')
                {{ $user['image'] }}
            @endslot
            @slot('gender')
                {{ $user['gender'] }}
            @endslot
            @slot('follow')
                {{ $user['follow'] }}
            @endslot
        @endcomponent
    @endforeach
</body>

</html>
