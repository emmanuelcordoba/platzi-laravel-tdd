<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-200 py-10">
    <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
        @if($errors->any())
            <ul class="list-none p-4 mb-4 bg-red-100 text-red-500">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="tags" method="POST" class="flex mb-4">
            @csrf
            <input type="text" name="name" id="name" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="Nueva etiqueta">
            <input type="submit" value="Agregar" class="rounded-r px-8 bg-blue-500 text-white outline-none">
        </form>
        <h1 class="text-lg text-center mb-4">Listado de Etiquetas</h1>
        <table>
            @forelse($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                    <td class="border px-4 py-2">{{ $tag->slug }}</td>
                    <td class="px-4 py-2">
                        <form action="tags/{{$tag->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar" class="px-3 rounded bg-red-500 text-white">
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td>No hay etiquetas</td></tr>
            @endforelse
        </table>
    </div>
    </body>
</html>
