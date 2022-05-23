@extends('layouts.plantilla')
@section('title', 'Editar Curso de ')

@section('content')
  <h1>En esta página podrás editar el curso</h1>
  
  <form action="{{route('cursos.update', $course)}}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label>Nombre</label><br>
      <input type="text" name="name" value="{{old('name', $course->name)}}">
      @error('name')
          <br>
          <small>{{$message}}</small>
          <br>
      @enderror
    </div>
    <div>
      <label>Descripción</label><br>
      <textarea name="description" cols="30" rows="10" >{{old('description', $course->description)}}</textarea>
      @error('description')
          <br>
          <small>{{$message}}</small>
          <br>
      @enderror
    </div>
    <div>
      <label>Categoría</label><br>
      <input type="text" name="category" value="{{old('category', $course->category)}}">
      @error('category')
          <br>
          <small>{{$message}}</small>
          <br>
      @enderror
    </div>
    <div>
      <br>
      <button type="submit">actualizar formulario</button>
    </div>
  </form>
@endsection