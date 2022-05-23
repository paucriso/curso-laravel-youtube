@extends('layouts.plantilla')
@section('title', 'Crear Curso')
@section('content')
  <h1>En esta página podrás crear un curso</h1>
  
  <form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <div>
      <label>Nombre</label><br>
      <input type="text" name="name" value="{{old('name')}}">
      @error('name')
       <br>
       <small>{{$message}}</small>
       <br>   
      @enderror
    </div>
    <div>
      <label>Descripción</label><br>
      <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
      @error('description')
          <br>
          <small>{{$message}}</small>
          <br>
      @enderror
    </div>
    <div>
      <label>Categoría</label><br>
      <input type="text" name="category" value="{{old('category')}}">
      @error('category')
       <br>
       <small>{{$message}}</small>
       <br>   
      @enderror
    </div>
    <div>
      <br>
      <button type="submit">enviar formulario</button>
    </div>
  </form>

@endsection
