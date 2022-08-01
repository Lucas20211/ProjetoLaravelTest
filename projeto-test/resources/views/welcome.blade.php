<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>Hello World!!</h1>
    @if(10>15)
    <p>Condição verdadeira</p>
    @endif()

    <p>{{ $nome }}</p>

    <p>Meu nome é {{$nome}}, eu tenho {{$idade}} anos e sou {{$profissao}}. </p>

    @for($i=0; $i < count($arr);$i++) 
    <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2 )
        <p>O i é 2</p>
        @endif
        @endfor

        <!-- Comentario sem Blade -->
        {{-- Comentario com Blade --}}
        <div>
            <ul>
                <li>
                    <a href="/contact">Contatos</a>
                </li>
                <li>
                    <a href="/produtos">Produtos</a>
                </li>
            </ul>

        </div>
</body>

</html>