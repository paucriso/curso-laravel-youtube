@extends('layouts.plantilla')
@section('title', 'Curso de ' . $course->name)

@section('content')
  <h1>Información del curso de {{$course->name}} </h1> 
  <a href="{{route('cursos.edit', $course)}}">editar curso</a>
  <p><strong>Categoría: </strong>{{$course->category}}</p>
  <p>{{$course->description}}</p>
  <a href="{{route('cursos.index')}}">volver a cursos</a>
  <br>
<form action="{{route('cursos.destroy', $course)}}" method="POST">
  @csrf
  @method('delete')
  <button type="submit">borrar curso</button>
</form>
@endsection

