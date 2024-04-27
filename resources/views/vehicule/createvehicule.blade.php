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
          <div class="col-md-8">
            <h3 class="text-secondary border-bottonm mb-3 p-2">
            <i class="fasc fa-plus"></i> Ajouter un vehicule
            </h3>
              <form action="{{route('vehicule.store')}}" method="POST">
              @csrf
              <div class="form-group">
              <input type="text"name="title" id="title" class="from-control" placeholder="Titre">
              </div>
              <div class="form-group"> <button class="btn btn-primary" type="submit">Valider</div>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
   
      
@endsection
