@extends('adminlte::page')
@section('title', __('cruds.peticion.title'))
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>{{ __('global.answer') }} {{ __('cruds.peticion.title_singular') }}</h2>
    </div>
    <div class="card-body">
      <form action="{{ route("peticiones.update", $peticion->id) }}" method="POST">
        <input id="answer" name="answer" value="SI" type="hidden">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nombre" class="form-label">{{ __('cruds.peticion.fields.name') }}</label>
          <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{ old('nombre', isset($peticion) ? $peticion->nombre : '') }}" readonly>    
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('cruds.peticion.fields.email') }}</label>
          <input id="email" name="email" type="email" step="any" class="form-control" tabindex="2" value="{{ old('email', isset($peticion) ? $peticion->email : '') }}" readonly>
        </div>
        <div class="mb-3">
          <label for="sujeto" class="form-label">{{ __('cruds.peticion.fields.subject') }}</label>
          <input id="sujeto" name="sujeto" type="text" step="any" class="form-control" tabindex="3" value="{{ old('sujeto', isset($peticion) ? $peticion->sujeto : '') }}" readonly>
        </div>
        <div class="mb-3">
          <label for="peticion" class="form-label">{{ __('cruds.peticion.fields.petition') }}</label>
          <textarea id="peticion" name="peticion" class="form-control" rows="5" tabindex="8" readonly>{{ old('peticion', isset($peticion) ? $peticion->peticion : '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="respuesta" class="form-label">{{ __('cruds.peticion.fields.answer') }}</label>
            <textarea id="respuesta" name="respuesta" class="form-control" rows="5" tabindex="8">{{ old('respuesta', isset($peticion) ? $peticion->respuesta : '') }}</textarea>
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
