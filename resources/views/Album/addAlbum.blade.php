@extends('layout.master')

@section('content')
    @include('components.nav')
    <div class="container">
        <h1 class="text-center">Ajouter un Album</h1>
        <form action="{{route('storeAlbum')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <select name="user" id="" class="custom-select">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary d-block mx-auto">Save</button>
        </form>
    </div>
@endsection