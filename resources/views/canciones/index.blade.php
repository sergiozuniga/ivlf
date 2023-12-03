@extends('adminlte::page')
@section('title', __('cruds.cancion.title'))
@section('content_header')
    <h1>{{ __('cruds.cancion.title') }}</h1>
@endsection
@section('content')
<a href="{{ route('canciones.create') }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> {{ __('global.add') }} {{ __('cruds.cancion.title_singular') }}</a>
<table class="table table-light table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">{{ __('cruds.cancion.fields.id') }}</th>
      <th scope="col">{{ __('cruds.cancion.fields.title') }}</th>
      <th scope="col">{{ __('cruds.cancion.fields.mp3') }}</th>
      <th scope="col">{{ __('global.actions') }}</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($canciones as $cancion)
    <tr>
        <td>{{$cancion->id}}</td>
        <td>{{$cancion->titulo}}</td>
        <td>{{ ($cancion->mp3 == 1) ? 'SI' : 'NO' }}</td>
        <td>
          <form action="{{ route('canciones.destroy', $cancion->id) }}" method="POST" class="form_delete">
            <a href="{{ route('canciones.edit', $cancion->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> {{ __('global.edit') }}</a> 
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
  {!! $canciones->links() !!}
</div>  
@endsection
@section('css')
<link href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet" />
@endsection
@section('js')
<script src="{{ asset('plugins/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('js/mensaje.js')}}"></script>
@endsection
