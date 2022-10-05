<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    //
    public function insertform(){
        return view('stud_create');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $city = $request->input('city');
      
        $data=array('name'=>$name,"age"=>$age,"city"=>$city,);
        DB::table('user')->insert($data);
        echo "Record inserted successfully.<br/>";
        }
        }
?>