<?php

namespace App\Http\Controllers;

use App\Models\Ersin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ErsinController extends Controller
{
    public function index() {
       
        //$users = Ersin::all();
        //$users = Ersin::orderBy('age')->get();
        //$users = Ersin::orderBy('age', 'desc')->get();
        //$users = Ersin::where('city', 'Varna')->get();
        $users = Ersin::latest()->get();

        return view('user', [
            'users' => $users
        ]);
    } 

    public function show($id) {

        $user = Ersin::find($id);

        return view('details', ['user' => $user]);
    }

    public function create() {
        return view('create');
    }
}
