
<h1>Create Players</h1>
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
</form>
