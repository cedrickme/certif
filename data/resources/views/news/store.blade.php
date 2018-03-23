@extends('headee')


@section('content')


<div class="alert alert-danger">
  <div class="">
    <div class="">
       <h1> liste des musique </h1>
    </div>
         @foreach(albums as album)
         <p>{{album->titre}}</p>
         <p>{{album->auteur}}</p>
         <p>{{album->genre}}</p>
         <p>{{album->parution}}</p>
         @endforeach
  </div>

</div>

@stop
