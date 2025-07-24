@extends('layout.app')

@section('title', 'Contacto | Proserma')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1>Contacto</h1>
        <p class="lead">¿Listo para optimizar su operación? Hablemos.</p>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <form action="#" method="POST">
                {{-- CSRF Token es crucial para la seguridad en Laravel --}}
                @csrf 
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</div>
@endsection