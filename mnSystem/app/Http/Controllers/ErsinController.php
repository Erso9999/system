<?php

namespace App\Http\Controllers;

use App\Models\Ersin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ErsinController extends Controller
{
    public function index() {
       
        $users = Ersin::all();
        //$users = Ersin::orderBy('age')->get();
        //$users = Ersin::orderBy('age', 'desc')->get();
        //$users = Ersin::where('city', 'Varna')->get();
        //$users = Ersin::latest()->get();

        return view('user', [
            'users' => $users
        ]);
    } 

    public function show($id) {

        //$user = Ersin::find($id);
        $user = Ersin::findOrFail($id);

        return view('details', ['user' => $user]);
    }

    public function create() {
        return view('create');
    }

    public function store() {

        $user = new Ersin();

        $user->name = request('name');
        $user->age = request('age');
        $user->city = request('city');

        $user->save();

        return redirect('/user');//-with('msg', 'User has been added'); // изпращаме сесия с променлива msg 
    }

    public function destroy($id) {

        $user = Ersin::findOrFail($id);
        $user->delete();

        return redirect('/user');
    }
}
