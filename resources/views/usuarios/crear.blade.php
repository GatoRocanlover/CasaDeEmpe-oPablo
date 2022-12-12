<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CASA DE EMPEÑOS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css
            
            */
    </style>


</head>

<body class="antialiased ">
    <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

         <!-- encabezado -->
    <div class="size">
      <div class="navbar1 flex size">
        <div class="max-w-6xl mx-auto mr-2">
          <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
        </div>
        <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>

            </div>
        </div>
        <!-- MENU -->
        @include('layout.nav')

        @can('crear-usuario')
        <div class="text-center mt-4">
            <h3 class="">Alta de Usuarios</h3>
        </div>

        <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size50 fondoformulario">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombre:</label>
                                            <!-- <input type="text" name="name" id="name" class="form-control"> -->
                                            {!! Form::text('name', null, ['class' => 'form-control mt-1','placeholder'=>'Ingrese Nombre de Usuario']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="email">Usuario:</label>
                                            <!-- <input type="text" name="email" id="email" class="form-control"> -->
                                            {!! Form::text('email', null, ['class' => 'form-control mt-1','placeholder'=>'Ingrese Usuario para ingresar al sistema']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <!-- <input type="password" name="password" id="password" class="form-control"> -->
                                            {!! Form::password('password', ['class' => 'form-control mt-1','placeholder'=>'Ingrese Una Contraseña']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="confirm-password">Confirmar Password:</label>
                                            <!--  <input type="password" name="confirm-password" id="confirm-password"
                                                class="form-control"> -->
                                            {!! Form::password('confirm-password', ['class' => 'form-control mt-1','placeholder'=>'Valida Su Nueva Contraseña']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="">Roles:</label>

                                            {!! Form::select('roles[]', $roles, [], ['class' => 'form-control']) !!}

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
        <div class="mt-8">
            <br>
            <br>
        </div>
        @else
    <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div> 
@endcan
</body>

<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</html>