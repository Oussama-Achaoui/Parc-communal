@extends('layouts.app', ['page' => __('Maps'), 'pageSlug' => 'maps'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    Logalisation
                </div>
                <div class="input-group{{ $errors->has('Entrez le matricule du véhicule') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" Entrez le matricule du véhicule="Entrez le matricule du véhicule" class="form-control{{ $errors->has('Entrez le matricule du véhicule') ? ' is-invalid' : '' }}" placeholder="{{ __('Entrez le matricule du véhicule') }}">
                            @include('alerts.feedback', ['field' => 'Entrez le matricule du véhicule'])
                        </div>

                <div class="card-body">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush
