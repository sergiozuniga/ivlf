@extends('adminlte::page')
@section('title', config('app.name', 'IVLF'))
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <img class="img-fluid" style="width: 88%" src="{{ asset('img/logo_ivlf.png') }}" alt="IVLF">
    </div>
    <div class="row justify-content-center align-items-center">
        <img class="img-fluid" src="{{ asset('img/iglesia.jpg') }}" alt="IVLF">
    </div>
</div>
@endsection
