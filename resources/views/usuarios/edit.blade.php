@extends('adminlte::page')
@section('title', __('cruds.user.title'))
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>{{ __('global.edit') }} {{ __('cruds.user.title_singular') }}</h2>
    </div>
    <div class="card-body">
      <form action="{{ route("usuarios.update", $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">{{ __('cruds.user.fields.name') }}</label>
          <input id="name" name="name" type="text" class="form-control" tabindex="1" value="{{ old('name', isset($usuario) ? $usuario->name : '') }}" required>    
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('cruds.user.fields.email') }}</label>
          <input id="email" name="email" type="email" step="any" class="form-control" tabindex="2" value="{{ old('email', isset($usuario) ? $usuario->email : '') }}" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">{{ __('cruds.user.fields.password') }}</label>
          <input id="password" name="password" type="password" step="any" class="form-control" tabindex="3" value="">
        </div>
        <div class="mb-3">
          <a href="/usuarios" class="btn btn-secondary" tabindex="5"><i class="fas fa-power-off"></i> {{ __('global.cancel') }}</a>
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
