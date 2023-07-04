@extends('layouts.app')

@section('contenido')

<form action="{{route('pelicula.update',$pelicula)}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name='nombre' value="{{$pelicula->nombre}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion" name='descripcion'value="{{$pelicula->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Imagen</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imagen" name='imagen'value="{{$pelicula->imagen}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Trailler</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Trailler" name='trailer'value="{{$pelicula->trailer}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
  @endsection