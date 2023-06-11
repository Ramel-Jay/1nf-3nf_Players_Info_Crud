<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players as ModelsPlayers;
use App\Models\Games as ModelsGames;
use App\Models\Roles as ModelsRoles;
use App\Models\States as ModelsStates;

class PlayersController extends Controller
{
    public function index(){
        $players = ModelsPlayers::all();
        return view('admin.players.index', compact('players'));
        // return view('admin.players.index');
    }

    public function create(){
        $games = ModelsGames::all();
        $roles = ModelsRoles::all();
        $states = ModelsStates::all();

        return view('admin.players.create', compact('games','roles','states'));
    }

    public function store(Request $request){

        // $games = ModelsGames::findOrFail($request->game_id);
        $roles = ModelsRoles::findOrFail($request->role_id);
        // $states = ModelsStates::findOrFail($request->state_code);
        // dd($states);

        $roles->players()->create([
            // 'role_id' => $request->role_id,
            'game_id' => $request->game_id,
            'name' => $request->name,
            'ign' => $request->ign,
            'address' => $request->address,
            'state_code' => $request->state_code,
        ]);

        return redirect('admin/players');
    }

    public function edit(int $player){

        $games = ModelsGames::all();
        $roles = ModelsRoles::all();
        $states = ModelsStates::all();

        $player = ModelsPlayers::findOrFail($player);
        // dd($player);
        return view('admin.players.edit', compact('games','roles','states', 'player'));
    }

    public function update(Request $request, $player_id){


                // $games = ModelsGames::findOrFail($request->game_id);
                // $roles = ModelsRoles::findOrFail($request->role_id);
                // $states = ModelsStates::findOrFail($request->state_code);

                $players = new ModelsPlayers;

                $players->where('id', $player_id)->update([
                    'role_id' => $request->role_id,
                    'game_id' => $request->game_id,
                    'name' => $request->name,
                    'ign' => $request->ign,
                    'address' => $request->address,
                    'state_code' => $request->state_code,
                ]);


                return redirect('admin/players');


    }
}
