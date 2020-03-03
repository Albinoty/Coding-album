@extends('layout.master')

@section('content')
    @include('components.nav')

    <div class="container">
        <h1 class="text-center">albums</h1>
        <a href="{{route('createAlbum')}}">
            <button class="btn btn-primary d-block mx-auto">Ajouter un album</button>
        </a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <td>{{$album->id}}</td>
                        <td>{{$album->nom}}</td>
                        <td>{{$album->description}}</td>
                        <td>
                            {{-- <a href="#"><button class="btn btn-success">Album</button></a> --}}
                            {{-- <a href="{{route('editalbum',$album->id)}}"><button class="btn btn-warning">Modifier</button></a>
                            <a href="{{route('destroyalbum',$album->id)}}"><button class="btn btn-danger">Supprimer</button></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>


@endsection