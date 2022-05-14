@extends('layouts.plantilla')
@section('title', 'Editar Curso de ')

@section('content')
  <h1>En esta página podrás editar el curso</h1>
  
  <form action="{{route('cursos.update', $course)}}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label>Nombre</label><br>
      <input type="text" name="name" value="{{$course->name}}">
    </div>
    <div>
      <label>Descripción</label><br>
      <textarea name="description" cols="30" rows="10" >{{$course->description}}</textarea>
    </div>
    <div>
      <label>Categoría</label><br>
      <input type="text" name="category" value="{{$course->category}}">
    </div>
    <div>
      <br>
      <button type="submit">actualizar formulario</button>
    </div>
  </form>
@endsection