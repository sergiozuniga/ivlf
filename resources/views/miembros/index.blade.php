@extends('adminlte::page')
@section('title', __('cruds.miembro.title'))
@section('content_header')
    <h1>{{ __('cruds.miembro.title') }}</h1>
@endsection
@section('content')
<a href="{{ route("miembros.create") }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> {{ __('global.add') }} {{ __('cruds.miembro.title_singular') }}</a>
<table class="table table-light table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">{{ __('cruds.miembro.fields.id') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.name') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.address') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.location') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.region') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.email') }}</th>
      <th scope="col">{{ __('cruds.miembro.fields.phone') }}</th>
      <th scope="col">{{ __('global.actions') }}</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($miembros as $miembro)
    <tr>
        <td>{{$miembro->id}}</td>
        <td>{{$miembro->nombre}}</td>
        <td>{{$miembro->direccion}}</td>
        <td>{{$miembro->comuna->nombre}}</td>
        <td>{{$miembro->region->nombre}}</td>
        <td>{{$miembro->email}}</td>
        <td>{{$miembro->fono}}</td>
        <td>
          <form action="{{ route('miembros.destroy', $miembro->id) }}" method="POST" class="form_delete">
            <a href="{{ route('miembros.edit', $miembro->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> {{ __('global.edit') }}</a> 
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> {{ __('global.delete') }}</button>
          </form>
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-start">
  {!! $miembros->links() !!}
</div>  
@endsection
@section('css')
<link href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet" />
@endsection
@section('js')
<script src="{{ asset('plugins/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('js/mensaje.js')}}"></script>
@endsection
