@extends('adminlte::page')
@section('title', __('cruds.cancion.title'))
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>{{ __('global.edit') }} {{ __('cruds.cancion.title_singular') }}</h2>
    </div>
    <div class="card-body">
      <form action="{{ route("canciones.update", $cancion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="titulo" class="form-label">{{ __('cruds.cancion.fields.title') }}</label>
          <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1" value="{{ old('titulo', isset($cancion) ? $cancion->titulo : '') }}">    
        </div>
        <div class="mb-3">
          <label for="letra" class="form-label">{{ __('cruds.cancion.fields.letter') }}</label>
          <textarea id="letra" name="letra" class="form-control" rows="5" tabindex="2">{{ old('letra', isset($cancion) ? $cancion->letra : '') }}</textarea>
        </div>
        <div class="mb-3">
          <label for="mp3" class="form-label">{{ __('cruds.cancion.fields.mp3') }}</label>
          <input id="mp3" name="mp3" type="number" step="any" class="form-control" tabindex="3" min="0" max="1" value="{{ old('mp3', isset($cancion) ? $cancion->mp3 : '') }}">
        </div>
        <div class="mb-3">
          <a href="/canciones" class="btn btn-secondary" tabindex="5"><i class="fas fa-power-off"></i> {{ __('global.cancel') }}</a>
          <button type="submit" class="btn btn-primary" tabindex="4"><i class="fas fa-save"></i> {{ __('global.save') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
