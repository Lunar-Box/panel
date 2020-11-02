<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index($id) {
        $user = Auth::user();
        $server = Servers::findOrFail($id);
        if ($server->owner_id != Auth::user()->id) {
            return abort(404);
        };

        return view('view')->with([
            'server' => $server,
        ]);
    }
}
