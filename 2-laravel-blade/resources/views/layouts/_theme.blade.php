<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>
    <style>
        header {
            background-color: #ccc;
            padding: 10px;
        }

        main {
            min-height: 60vh;
        }

        footer {
            background-color: #646161;
            padding: 10px;
        }
    </style>
</head>

<body>
    {{-- utilizar <x-header></x-header> é a mesma coisa de @component('header')@endcomponent --}}

    <x-header>
    </x-header>
    
    @yield('content')

    <x-footer>
    </x-footer>
</body>

</html>
