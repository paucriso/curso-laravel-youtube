<style>
  .active {
    color: red;
  }
</style>
<header>
  <h1>Curso Laravel</h1>
  <nav>
    <ul>
      <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
      <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
      <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a></li>
      <li><a href="{{route('contacto.index')}}" class="{{request()->routeIs('contacto.*') ? 'active' : '' }}">Contacto</a></li>
    </ul>
  </nav>
</header>