@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    
    
<a href="{{ route("vehicule.indexvehicule") }}">  <button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/gestion.png" alt=""></button></a>                  
<a href="{{ route("carburant.indexcarburant") }}"> <button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/carburant.png" alt=""></button></a>
<a href="{{ route("entretien.indexentretien") }}"><button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/entretien.png" alt=""></button></a>
<a href="{{ route("reparation.indexreparation") }}"> <button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/reparage.png" alt=""></button></a>
<a href="{{ route("edition.indexedition") }}"><button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/edition.png" alt=""></button></a>
<a href="{{ route("parametrage.indexparametrage") }}"><button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/parametrage.png" alt=""></button></a>
<a href="{{ route("localisation.maps") }}"><button type="submit" class="btn btn-primary btn-round btn-lg"><img src="{{ asset('black') }}/img/localisation.jpg" alt=""></button></a>
                               
                
@endsection

@push('js')
    
@endpush
