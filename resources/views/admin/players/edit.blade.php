
<h1>Edit Players</h1>
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
</form>
