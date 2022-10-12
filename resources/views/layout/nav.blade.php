<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid ">

    <a class="nav-link navbar-brand" href="{{route('inicio_admin')}}">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CLIENTE
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item"href="{{route('agregar_cliente')}}">AGREGAR</a></li>
            <li><a class="dropdown-item" href="{{route('listado_cliente')}}">LISTADO</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRENDA
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('listado_prenda')}}">BOLETAS</a></li>
            <li><a class="dropdown-item" href="{{route('cotizacionprenda.listado')}}">COTIZACION</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CONTRATO
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('generar_boleta')}}">GENERAR</a></li>
            <li><a class="dropdown-item" href="{{route('listado_boleta')}}">LISTADO </a></li>
          </ul>
        </li>
      </ul>
    </div> -->
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USUARIO
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('agregar_usuario')}}">AGREGAR</a></li>
            <li><a class="dropdown-item" href="{{route('listado_usuario')}}">LISTADO</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CAJA
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('Pagar')}}">PAGAR</a></li>
          <!--   <li><a class="dropdown-item" href="{{route('listado_boleta_pagar')}}">LISTADO BOLETAS</a></li>
            <li><a class="dropdown-item" href="{{route('listado_boleta_desembolsar')}}">DESEMBOLSAR</a></li>
 -->          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="dropdown-item" style="color:white" id="navbarDarkDropdownMenuLink"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        SALIR
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
      </ul>
    </div>
  </div>
</nav>