@extends('layouts.plantilla')
@section('title', 'Curso de ' . $course->name)

@section('content')
  <h1>Información del curso de {{$course->name}} </h1> 
  <p><strong>Categoría: </strong>{{$course->category}}</p>
  <p>{{$course->description}}</p>
  <a href="{{route('cursos.index')}}">volver a cursos</a>
@endsection
