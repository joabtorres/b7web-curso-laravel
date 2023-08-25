<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .post {
            margin-bottom: 20px;
        }

        .post * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach ($posts as $post)
            @include('components.post-list', [$post])
        @endforeach
    </div>

    <hr>
    <h1>includeIf: utilizado quando existe o arquivo</h1>
    @includeIf('components.about') {{-- note que não exite o arquivo about.blade.php dentro do componentes - --}}

    <hr>
    <h1>includeWhen: Utilizando quando uma condição é verdadeira</h1>
    @includeWhen(true, 'components.include')


    <hr>
    <h1>includeUnless: Utilizando quando uma condição é falso</h1>
    @includeUnless(false, 'components.include')

    <hr>
    <h1>includeFirst: utilizado para carregar o primeiro componente existente</h1>
    @includeFirst(['components.include-off', 'components.include'], ['data' => 'valor'])

</body>

</html>
