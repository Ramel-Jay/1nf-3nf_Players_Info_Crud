<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- @vite('resources/css/app.css') --}}
        @vite(['resources/css/app.css','resources/js/app.js'])

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="m-10">
            <a href={{ url('admin/players/create') }} class="text-white text-uppercase bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Player</a>
        </div>

        <h1>Search Players</h1>
        <form action="{{ route('search.players') }}" method="GET">
            @csrf
            @method('get')
            <div>
                <input type="search" id="query" name="query" required>
                <button type="submit" >Search</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Game</th>
                    <th>IGN</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->role->role }}</td>
                        <td>{{ $player->game->game_name }}</td>
                        <td>{{ $player->ign }}</td>
                        <td>{{ $player->address }}</td>
                        <td>{{ $player->state->city }}</td>
                        <td>
                            <a href="{{ url('admin/players/'.$player->id.'/edit') }}">Edit</a>
                            <a href="{{ url('admin/players/'.$player->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

