<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApplicationController extends Controller
{
    public function start() {
        $res = Http::post('http://127.0.0.1:5000/start');

        return view('view')->with([
            'log' => $res->json()['data'],
        ]);
    }

    public function restart() {
        $res = Http::post('http://127.0.0.1:5000/restart');

        return view('view')->with([
            'log' => $res->json()['data'],
        ]);
    }

    public function stop() {
        $res = Http::post('http://127.0.0.1:5000/stop');

        return view('view')->with([
            'log' => $res->json()['data'],
        ]);
    }

    public function kill() {
        $res = Http::post('http://127.0.0.1:5000/kill');

        return view('view')->with([
            'log' => $res->json()['data'],
        ]);
    }
}
