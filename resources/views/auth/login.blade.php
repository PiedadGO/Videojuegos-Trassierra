@extends('plantillas.base')

@section('titulo', 'Iniciar sesión')

@section('contenido')

    <div class="text-center my-4">
        <h2 class="fw-bold">Iniciar sesión</h2>
    </div>
    <div class="d-flex justify-content-center my-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('usuario.login.submit') }}" class="bg-light p-4 rounded-4 mt-5 w-50">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
