@extends('layouts.plantilla')
@section('title', 'Página de Cursos')
@section('content')
  <h1>Página de cursos</h1> 
  <a href="{{route('cursos.create')}}">Crear curso</a>  
  <ul>
    @foreach ($courses as $course)
      <li>
        <a href="{{route('cursos.show', $course->id)}}">{{{$course->name}}}</a>
      </li>
    @endforeach
  </ul>
  {{$courses->links()}}
@endsection