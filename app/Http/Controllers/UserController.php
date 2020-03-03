<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        return view("users",compact('users'));

    }

    public function create(){
        return view('User.addUser');
    }

    public function store(Request $request){
        $user = New User();

        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = $request->input('mdp');

        $user->save();

        return redirect()->route('users');

    }

    public function edit($id){
        $user = User::find($id);

        return view('User.editUser',compact('user'));
    }


    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = $request->input('mdp');

        $user->save();

        return redirect()->route('users');
    }

    public function destroy($id){

        $user = User::find($id);

        $user->delete();

        return redirect()->back();

    }


}
