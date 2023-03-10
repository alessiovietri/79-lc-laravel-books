<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col">

                            <ul>
                                <li>
                                    ID: {{ $book->id }}
                                </li>
                                <li>
                                    TITLE: {{ $book->title }}
                                </li>
                                <li>
                                    AUTHOR: {{ $book->author }}
                                </li>
                            </ul>


                        </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
