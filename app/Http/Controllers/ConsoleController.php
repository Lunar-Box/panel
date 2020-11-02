<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;
use Illuminate\Support\Facades\Auth;

class ConsoleController extends Controller
{
    public function create(Request $res) {
       $server = new Servers();
       $server->owner_id = $res->owner_id;
       $server->uuid = $res->uuid;
       $server->uuid_short = $res->uuid_short;
       $server->startup = $res->startup;
       $server->save();

       return view('view');
    }

    public function get_servers() {
        $user = Auth::user();
        $servers = Servers::all()->where('owner_id', $user->id);

        return view('servers')->with([
            'servers' => $servers,
        ]);
    }

    public function index() {
        return view('servers');
    }
}
