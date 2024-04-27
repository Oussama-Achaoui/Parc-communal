@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container">
    <div class="row justifiy-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <h3 class="text-secondary border-bottonm mb-3 p-2">
            <i class="fasc fa-plus"></i> modifier un vehicule{{ $vehicule->title}}
            </h3>
              <form action="{{route("vehiculle.update",$Vehicule->slug) }}" method="put">
              @csrf
              <div class="form-group">
              <input type="text"name="title" id="title" class="from-control" placeholder="Titre" valeur="{{$vehicule->title }}">
              </div>
              <div class="form-group"> <button class="btn btn-primary">Valider</div>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
   
      
@endsection
