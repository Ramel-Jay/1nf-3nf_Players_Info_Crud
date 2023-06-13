
{{-- <h1>Edit Players</h1>
<form action="{{ url('admin/players/'.$player->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $player->name  }}" placeholder="name"/>
    <input type="text" name="ign" value="{{ $player->ign }}" placeholder="ign"/>
    <input type="text" name="address" placeholder="address" value="{{ $player->address }}"/>
    <select id="roles" name="role_id">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" {{ $player->role_id == $role->id ? 'selected' : ''}}>
                {{ $role->role}}
            </option>
        @endforeach
    </select>
    <select id="games" name="game_id">
        @foreach ($games as $game)
            <option value="{{ $game->id }}" {{ $player->game_id == $game->id ? 'selected' : ''}}>
                {{ $game->game_name}}
            </option>
        @endforeach
    </select>
    <select id="states" name="state_code">
        @foreach ($states as $state)
            <option value="{{ $state->state_code }}" {{ $player->state_code == $state->state_code ? 'selected' : '' }}>
                {{ $state->city}}
            </option>
        @endforeach
    </select>
    <button type="submit">Save</button>
</form> --}}


{{-- <h1>Create Players</h1>
<form action={{ url('admin/players') }} method="POST">
    @csrf
    <input type="text" name="name" placeholder="name"/>
    <input type="text" name="ign" placeholder="ign"/>
    <input type="text" name="address" placeholder="address"/>
    <select id="roles" name="role_id">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->role}}</option>
        @endforeach
    </select>
    <select id="games" name="game_id">
        @foreach ($games as $game)
            <option value="{{ $game->id }}">{{ $game->game_name}}</option>
        @endforeach
    </select>
    <select id="states" name="state_code">
        @foreach ($states as $state)
            <option value="{{ $state->state_code }}">{{ $state->city}}</option>
        @endforeach
    </select>
    <button type="submit">Save</button>
</form> --}}

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
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Player</h2>
                <form action="{{ url('admin/players/'.$player->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" value="{{ $player->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Player Full Name" required="">
                        </div>
                        <div class="w-full">
                            <label for="ign" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">In Game Name</label>
                            <input type="text" name="ign" id="ign" value="{{ $player->ign }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="In Game Name" required="">
                        </div>
                        {{-- <div class="w-full">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address" required="">
                        </div> --}}
                        <div>
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <select id="role" name="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="game" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Game</label>
                            <select id="game" name="game_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($games as $game)
                                    <option value="{{ $game->id }}">{{ $game->game_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                            <select id="city" name="state_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($states as $state)
                                    <option value="{{ $state->state_code }}">{{ $state->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input id="address" name="address" rows="4" value="{{ $player->address }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description here"/>
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Update Player
                    </button>
                </form>
            </div>
        </section>
    </body>
</html>



