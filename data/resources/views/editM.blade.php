@extends("headee")

@section('content')

          <h1> éditer un album </h1>

{!!Form::open('action' => 'Controller@method')!!}
  <div class="form-group">
     {!!Form::labe('titre','titre')!!}
     {!!Form::text('titre', $albums->titre,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
     {!!Form::labe('auteur','auteur')!!}
     {!!Form::text('auteur', $albums->auteur,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
     {!!Form::labe('genre','genre')!!}
     {!!Form::text('titre', $albums->genre,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
     {!!Form::labe('date','date')!!}
     {!!Form::number('date', $albums->parution,['class'=>'form-control'])!!}
  </div>

{!! Form::close() !!}
@endsection
