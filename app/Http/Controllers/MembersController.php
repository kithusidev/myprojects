<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use DB;

class MembersController extends Controller
{
    function index(){
        return view('member');
    }
//validating the data in the input fields
    function enter(Request $request){
       $request->validate([
        "name"=>"required",
        "email"=>"required|email|unique:member",
        "position"=>"required",
        "gender"=>"required"

       ]);

       $query = DB::table('members')->insert([
        "name"=>$request->input("name"),
        "email"=>$request->input("email"),
        "gender"=>$request->input("gender"),
        "position"=>$request->input("position"),

       ]);
       if($query){
           return back()->with('success','Member registered succesfully');
       }else{
           return back()->with('fail','An error occurred');
       }
       //return $request->input();
    }

    function view(){
        $data = Members::all();
        return view('list',['Members'=>$data]);
    }

  // function delete($id){
       //$dat = Members::find($id);
        //$dat = delete();
        //return redirect('view');
   //}
}
