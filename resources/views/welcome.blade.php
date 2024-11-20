<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Listado de Etiquetas</h1>
        <table>
            @forelse($tags as $tag)
            @empty
                <tr><td>No hay etiquetas</td></tr>
            @endforelse
        </table>
    </body>
</html>
