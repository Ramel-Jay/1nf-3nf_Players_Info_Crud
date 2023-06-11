
<h1>Edit Players</h1>
<form action="{{ url('admin/players/'.$players->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $players->name  }}" placeholder="name"/>
    <input type="text" name="ign" value="{{ $players->ign }}" placeholder="ign"/>
    <input type="text" name="address" placeholder="address" value="{{ $players->address }}"/>
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
</form>
