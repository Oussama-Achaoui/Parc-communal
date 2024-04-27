@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container">
    <div class="row justifiy-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
          <div class="col-md-4">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between al">
            <h3 class="text-secondary">
            <i class="fasc fa-th-list"></i> vehicule
            </h3>
            <a href="{{ route("vehicule.createvehicule") }}" class="">creer</a>
              
              </a>
              
              </div>
              <table class="table tatble-hover table">
                <thead class=" text-primary">
                  <tr>
                  <th>Id</th>
                  <th>Titre</th>
                  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($errors as $errors)
                  <td>
                  {{ $category->id}}
                  </td>
                    {{ $category->title}}
                  <td>
                  </td>
                  <td>
                  <a href="{{ route("vehicule.createvehicule") }}" class="">creer</a>
              <i class="fas fa-plus fa-x2"></i>
              </a>
              </td>
              @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
   
      
@endsection
