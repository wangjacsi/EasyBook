@extends('layouts.app')

@section('title', 'Home')

@section('styles')

@stop

@section('content')
<div class="wrapper wrapper-content" id="app">
    <div class="row animated fadeInRight">

        <div class="col-md-8 col-md-offset-2">

            <example></example>
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

</script>

@endsection
