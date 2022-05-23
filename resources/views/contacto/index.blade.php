@extends('layouts.plantilla')
@section('title', 'Contacto')
@section('content')
  <h1>Déjanos un mensaje</h1> 
  
  <form action="{{route('contacto.store')}}" method="POST">
    @csrf
    <label>
      Nombre <br>
      <input type="text" name="name">
    </label><br>

    <label>
      Email <br>
      <input type="text" name="email">
    </label><br>

    <label>
      Mensaje <br>
      <textarea name="message" id="" cols="30" rows="10"></textarea>
    </label><br>
    <button type="submit">enviar</button>
  </form>
@endsection