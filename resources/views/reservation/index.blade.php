@extends('layouts.app')

@section('title', 'Reservation')

@section('styles')
<!-- Sweet Alert -->
<link href="{{ URL::asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
@stop

@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Clients
        @endslot
        <li><a href="">Home</a></li>
        <li><a>Extra Pages</a></li>
        <li class="active"><strong>Clients</strong></li>
    @endcomponent
    <div class="wrapper wrapper-content animated fadeInRight" id="app">
        <reservation-clients></reservation-clients>
    </div>

@endsection

@section('scripts')
<!-- Sweet alert -->
<script src="{{ URL::asset('plugins/sweetalert/sweetalert.min.js') }}"></script>
<script>

</script>
@endsection
