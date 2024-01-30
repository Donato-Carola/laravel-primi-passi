<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Laravel</title>


</head>

<body>
    <header>
        <h1>HOME</h1>
        <ul>
          
            <li>
                <h3>
                    <a href="{{ route('product') }}">Prodotti</a>
                </h3>
            </li>
            <li>
                <h3>
                    <a href="{{ route('info') }}">INFO</a>
                </h3>
            </li>
            <li>
                <h3>
                    <a href="{{ route('about') }}">ABOUT</a>
                </h3>
            </li>
        </ul>

    </header>
</body>

<main>

</main>

</html>
