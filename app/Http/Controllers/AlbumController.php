<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\User;

class AlbumController extends Controller
{

    public function index(){
        //Affiche tous les albums
        $albums = Album::all();

        return view('albums',compact('albums'));
        
    }

    public function show($id){
        //Afficher tous les albums via une personne spécifique (id)
        $albums = Album::all()->where('id_user',$id);

        $user = User::find($id);

        return view('showAlbum',compact('albums','user'));
    }

    public function create(){
        
        $users = User::all();

        return view('Album.addAlbum',compact('users'));  
    }

    public function store(Request $request){
        
        $album = new Album();

        $album->nom = $request->input('nom');
        $album->description = $request->input('description');
        $album->id_user = $request->input('user');

        $album->save();


        return redirect()->route('albums');

    }

}
