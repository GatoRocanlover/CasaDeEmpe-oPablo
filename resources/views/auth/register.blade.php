  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <title>CASA DE EMPEÑOS</title>

  <div class="size">
      <div class="navbar1 flex size">
          <div class="max-w-6xl mx-auto mr-2">
              <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
          </div>
          <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
              C.V.</a>
          </div>
      </div>
  </div>
  <!-- MENU -->
  @include('layout.nav')
  @extends('layouts.app')

  @section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Registro') }}</div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('register') }}">
                              @csrf

                              <div class="row mb-3">
                                  <label for="name"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Nombre:') }}</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text"
                                          class="form-control @error('name') is-invalid @enderror" name="name"
                                          value="{{ old('name') }}" required autocomplete="name" autofocus>

                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="email"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico:') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email"
                                          class="form-control @error('email') is-invalid @enderror" name="email"
                                          value="{{ old('email') }}" required autocomplete="email">

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password"
                                          class="form-control @error('password') is-invalid @enderror" name="password"
                                          required autocomplete="new-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password-confirm"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Password:') }}</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control"
                                          name="password_confirmation" required autocomplete="new-password">
                                  </div>
                              </div>

                              <div class="row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Register') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
