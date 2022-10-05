<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserAccount;

class userController extends Controller
{
    
    public function open()
    {
        $users = User::all();

        return view('erso', [
            'users' => $users,
        ]);
    }

    public function create(Request $request)
    {   
        $name = $request->input('name');
        $age = $request->input('age');
        $city = $request->input('city');

        $data=array('name'=>$name,'age'=>$age,'city'=>$city);
        $query = DB::table('user')->insert($data);

        if($query){
            return back()->with('success', 'Data have been saved');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name1');
        $age = $request->input('age1');
        $city = $request->input('city1');

        $query_run = DB::update('update user set name = ?, age = ?, city = ?  where id = ?', [$name, $age, $city, $id]);

        if($query_run){
            return back()->with('success', 'Data have been saved');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function delete($id)
    {
        $query_run = DB::delete('delete from user where id = ?',[$id]);

        if($query_run){
            return back()->with('success', 'Data have been deleted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
