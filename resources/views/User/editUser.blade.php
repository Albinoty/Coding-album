@extends('layout.master')

@section('content')
    @include('components.nav')
    <div class="container">
        <h1 class="text-center">Ajouter un User</h1>
        <form action="{{route('updateUser',$user->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe:</label>
                <input type="password" name="mdp" class="form-control" value="{{$user->password}}">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Save</button>
        </form>
    </div>
@endsection