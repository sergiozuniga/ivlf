@extends('adminlte::page')
@section('title', __('cruds.user.title'))
@section('content_header')
    <h1>{{ __('cruds.user.title') }}</h1>
@endsection
@section('content')
<a href="{{ route("usuarios.create") }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> {{ __('global.add') }} {{ __('cruds.user.title_singular') }}</a>
<table class="table table-light table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">{{ __('cruds.user.fields.id') }}</th>
      <th scope="col">{{ __('cruds.user.fields.name') }}</th>
      <th scope="col">{{ __('cruds.user.fields.email') }}</th>
      <th scope="col">{{ __('global.actions') }}</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
        <td>
          <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="form_delete">
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> {{ __('global.edit') }}</a> 
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
  {!! $usuarios->links() !!}
</div>  
@endsection
@section('css')
<link href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet" />
@endsection
@section('js')
<script src="{{ asset('plugins/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('js/mensaje.js')}}"></script>
@endsection
