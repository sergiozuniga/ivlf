@extends('adminlte::page')
@section('title', __('cruds.peticion.title'))
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>{{ __('global.add') }} {{ __('cruds.peticion.title_singular') }}</h2>
    </div>
    <div class="card-body">
      <form action="{{ route("peticiones.store") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">{{ __('cruds.peticion.fields.name') }}</label>
          <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('cruds.peticion.fields.email') }}</label>
          <input id="email" name="email" type="email" step="any" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
          <label for="sujeto" class="form-label">{{ __('cruds.peticion.fields.subject') }}</label>
          <input id="sujeto" name="sujeto" type="text" step="any" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
          <label for="peticion" class="form-label">{{ __('cruds.peticion.fields.petition') }}</label>
          <textarea id="peticion" name="peticion" class="form-control" rows="5" tabindex="8"></textarea>
        </div>
        <div class="mb-3">
          <a href="/peticiones" class="btn btn-secondary" tabindex="5"><i class="fas fa-power-off"></i> {{ __('global.cancel') }}</a>
          <button type="submit" class="btn btn-primary" tabindex="4"><i class="fas fa-save"></i> {{ __('global.save') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('js/comunas.js')}}"></script>
@endsection
