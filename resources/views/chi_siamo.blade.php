<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi Passi - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <style>
            :root {
                font-family: Nunito;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                @foreach($nav as $list_item)
                    <li>
                        <a href="{{ route($list_item['link']) }} ">
                            {{ $list_item["name"] }}
                        </a>
                    </li>
                @endforeach
                </ul>
            </nav>
        </header>
    </body>
</html>
