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
    <body class="antialiased bg-gray-700">
        {{-- <div>
            <a href={{ url('admin/players/create') }} class="text-white text-uppercase bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Player</a>
        </div> --}}

        {{-- <h1>Search Players</h1>
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
        </table> --}}


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- <form action="{{ route('search.players') }}" method="GET">
                @csrf
                @method('get')
                <div class="pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="table-search" name="query" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>
            </form> --}}
            <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
                <div>
                    <a href={{ url('admin/players/create') }} id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="cursor-pointer inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Add Player</span>
                        Add Player
                    </a>
                </div>
                <div class="relative">
                    <form action="{{ route('search.players') }}" method="GET">
                        @csrf
                        @method('get')
                        <div class="bg-white dark:bg-gray-900 rounded-lg">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="table-search" name="query" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Game
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IGN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            City
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $player->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $player->role->role }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $player->game->game_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $player->ign }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $player->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $player->state->city }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('admin/players/'.$player->id.'/edit') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                                <a href="{{ url('admin/players/'.$player->id.'/delete') }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delte</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

