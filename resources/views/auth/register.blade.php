@extends('layouts.form')

@section('title', 'Registro')
@section('subtitle', 'Ingresa tus datos para registrarte.')

@section('content')
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">

                    @if ($errors->any())
                    <div class="alert alert-danger" id="notificacion" role="alert">
                        {{ $errors->first() }}
                    </div>
                    @endif

                    <form role="form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-dark"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control text-default" placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-dark"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control text-default" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control text-default" placeholder="Contraseña" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control text-default" placeholder="Confirmar contraseña" type="password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-default mt-4">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    setTimeout(function() {
        document.getElementById('notificacion').style.display = 'none';
    }, 2500);
</script>

@endsection
