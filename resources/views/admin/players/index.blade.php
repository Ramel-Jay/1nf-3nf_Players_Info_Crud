<a href={{ url('admin/players/create') }} class="btn btn-primary">Add Player</a>
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
                    <button>Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
