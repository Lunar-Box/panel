<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(Request $request) {
        $res = $request->all();
        return view('create', ['res' => $res]);
    }
}
