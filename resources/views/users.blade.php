@extends('layout.master')

@section('content')
    @include('components.nav')

    <div class="container">
        <h1 class="text-center">Users</h1>
        <a href="{{route('addUser')}}">
            <button class="btn btn-primary d-block mx-auto">Ajouter un User</button>
        </a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('showAlbum',$user->id)}}"><button class="btn btn-success">Album</button></a>
                            <a href="{{route('editUser',$user->id)}}"><button class="btn btn-warning">Modifier</button></a>
                            <a href="{{route('destroyUser',$user->id)}}"><button class="btn btn-danger">Supprimer</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>


@endsection