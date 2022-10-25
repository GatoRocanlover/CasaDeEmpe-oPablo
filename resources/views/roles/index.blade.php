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

        @can('ver-rol')
        <section class="section">
            <div class="text-center mt-4">
                <h3 class="page__heading">Roles</h3>
            </div>
            <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
                <div class="max-w-6xl size  flex items-center justify-center ">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-rol')
                            <a class="btn btn-warning fw-bold" href="{{ route('roles.create') }}">Nuevo Rol</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead class="letra-blanca bg-dark">
                                    <th style="color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    @can('editar-rol')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-rol')
                                    <th style="color:#fff;">Eliminar</th>
                                    @endcan
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td class="text-center">{{ $role->name }}</td>
                                        @can('editar-rol')
                                        <td>              
                                            <a class="btn btn-info" href="{{ route('roles.edit',$role->id) }}">Editar</a>  
                                        </td>
                                        @endcan
                                        @can('borrar-rol')
                                        <td>
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}  
                                        </td>
                                        @endcan
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

               
                            <div class="pagination justify-content-end">
                                {!! $roles->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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

@if (session('updateRol') == 'Se actualizo')
<script>
    /* Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'SE ACTUALIZO LA INFORMACIÓN!',
                        showConfirmButton: false,
                        timer: 1500
                    }) */
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'SE ACTUALIZO LA INFORMACIÓN!'
    })
</script>
@endif

</html>