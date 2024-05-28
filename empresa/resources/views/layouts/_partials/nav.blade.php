<nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark" >
  <div class="container-fluid">
      <a class="navbar-brand" href="#">Empresa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('servicios')}}">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('proyectos')}}">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clientes')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>