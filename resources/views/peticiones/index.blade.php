@extends('adminlte::page')
@section('title', __('cruds.peticion.title'))
@section('content_header')
    <h1>{{ __('cruds.peticion.title') }}</h1>
@endsection
@section('content')
<a href="{{ route("peticiones.create") }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> {{ __('global.add') }} {{ __('cruds.peticion.title_singular') }}</a>
<table class="table table-light table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">{{ __('cruds.peticion.fields.id') }}</th>
      <th scope="col">{{ __('cruds.peticion.fields.name') }}</th>
      <th scope="col">{{ __('cruds.peticion.fields.email') }}</th>
      <th scope="col">{{ __('cruds.peticion.fields.subject') }}</th>
      <th scope="col">{{ __('cruds.peticion.fields.date') }}</th>
      <th scope="col">{{ __('global.actions') }}</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($peticiones as $peticion)
    <tr>
        <td>{{$peticion->id}}</td>
        <td>{{$peticion->nombre}}</td>
        <td>{{$peticion->email}}</td>
        <td>{{$peticion->sujeto}}</td>
        <td>{{ date("d-m-Y H:i", strtotime($peticion->fecha)) }}</td>
        <td>
          <form action="{{ route('peticiones.destroy', $peticion->id) }}" method="POST" class="form_delete">
            <a href="{{ route('peticiones.show', $peticion->id) }}" class="{{ ($peticion->respuesta != '') ? 'btn btn-secondary' : 'btn btn-success' }}"><i class="fas fa-hands-helping"></i> {{ __('global.answer') }}</a> 
            <a href="{{ route('peticiones.edit', $peticion->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> {{ __('global.edit') }}</a> 
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
  {!! $peticiones->links() !!}
</div>  
@endsection
@section('css')
<link href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet" />
@endsection
@section('js')
<script src="{{ asset('plugins/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('js/mensaje.js')}}"></script>
@endsection
