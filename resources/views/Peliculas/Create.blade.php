@extends('layouts.app')

@section('contenido')

<form action="{{route('pelicula.store')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name='nombre'>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion" name='descripcion'>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Imagen</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imagen" name='imagen'>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Trailler</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Trailler" name='trailer'>
  </div>
 
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
  @endsection