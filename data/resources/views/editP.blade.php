@extends("headee")

@section('content')

<div class="container">
   <h1> éditer un produit </h1>
</div>

{!!Form::open('action' => 'Controller@method')!!}
  <div class="form-group">
     {!!Form::labe('type','type')!!}
     {!!Form::text('type', $produits->type,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
     {!!Form::labe('artiste','artiste')!!}
     {!!Form::text('artiste', $produits->artiste,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
     {!!Form::labe('info','info')!!}
     {!!Form::text('info', $produits->info,['class'=>'form-control'])!!}
  </div>

{!! Form::close() !!}
@endsection
