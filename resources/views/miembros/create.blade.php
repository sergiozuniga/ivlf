@extends('adminlte::page')
@section('title', __('cruds.miembro.title'))
@section('content')
@inject('regiones', 'App\Services\Regiones')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>{{ __('global.add') }} {{ __('cruds.miembro.title_singular') }}</h2>
    </div>
    <div class="card-body">
      <form action="{{ route("miembros.store") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">{{ __('cruds.miembro.fields.name') }}</label>
          <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('cruds.miembro.fields.email') }}</label>
          <input id="email" name="email" type="email" step="any" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
          <label for="fono" class="form-label">{{ __('cruds.miembro.fields.phone') }}</label>
          <input id="fono" name="fono" type="text" step="any" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
          <label for="region_id" class="form-label">{{ __('cruds.miembro.fields.region') }}</label><br>
          <select id="region_id" name="region_id" class="form-select" tabindex="4">
            <option value="">{{ __("cruds.miembro.fields.select_region") }}</option>
            @foreach($regiones->get() as $index => $region)
              <option value="{{ $index }}">{{ $region }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="comuna_id" class="form-label">{{ __('cruds.miembro.fields.location') }}</label><br>
          <select id="comuna_id" name="comuna_id" class="form-select" tabindex="5">
          </select>
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">{{ __('cruds.miembro.fields.address') }}</label>
          <input id="direccion" name="direccion" type="text" class="form-control" tabindex="6">
        </div>
        <div class="mb-3">
          <label for="nacimiento" class="form-label">{{ __('cruds.miembro.fields.birth') }}</label>
          <div class="input-group">
            <input type="text" id="nacimiento" name="nacimiento" class="form-control date" tabindex="7">
            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
          </div>
        </div>
        <div class="mb-3">
          <label for="invitado" class="form-label">{{ __('cruds.miembro.fields.invited_by') }}</label>
          <input id="invitado" name="invitado" type="text" step="any" class="form-control" tabindex="8">
        </div>
        <div class="mb-3">
          <label for="peticion" class="form-label">{{ __('cruds.miembro.fields.petition') }}</label>
          <textarea id="peticion" name="peticion" class="form-control" rows="5" tabindex="9"></textarea>
        </div>
        <div class="mb-3">
          <a href="/miembros" class="btn btn-secondary" tabindex="5"><i class="fas fa-power-off"></i> {{ __('global.cancel') }}</a>
          <button type="submit" class="btn btn-primary" tabindex="4"><i class="fas fa-save"></i> {{ __('global.save') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('css')
<link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css" rel="stylesheet') }}"/>
@endsection
@section('js')
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
<script src="{{ asset('js/comunas.js')}}"></script>
<script src="{{ asset('js/fecha.js')}}"></script>
@endsection
