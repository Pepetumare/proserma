@extends('layout.app')

@section('title', 'Inicio | Proserma')

@section('content')
    {{-- Hero Carousel Section --}}
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">

        {{-- Indicadores (los puntos de abajo) --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        {{-- Contenido del Carrusel (Imágenes y Texto) --}}
        <div class="carousel-inner">

            {{-- Slide 1 (IMPORTANTE: el primer item debe tener la clase 'active') --}}
            <div class="carousel-item active">
                <img src="{{ asset('img/Soluciones.png') }}"
                    class="d-block w-100" alt="Maquinaria industrial moderna">
                <div class="carousel-caption">
                    <h1 class="display-3">Soluciones Integrales en Mantención Industrial</h1>
                    <p class="lead">Optimizamos la productividad y seguridad de su planta con servicios de vanguardia.</p>
                    <a href="{{ route('servicios') }}" class="btn btn-primary btn-lg mt-3">Conoce Nuestros Servicios</a>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="carousel-item">
                <img src="{{ asset('img/calidad.png') }}"
                    class="d-block w-100" alt="Técnico trabajando con seguridad">
                <div class="carousel-caption">
                    <h1>Compromiso con la Seguridad y Calidad</h1>
                    <p class="lead">Equipos de profesionales altamente calificados para garantizar la continuidad de tu
                        operación.</p>
                    <a href="{{ route('nosotros') }}" class="btn btn-primary btn-lg mt-3">Sobre Nosotros</a>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="carousel-item">
                <img src="{{ asset('img/mantenimiento.png') }}" class="d-block w-100" alt="Análisis predictivo industrial">
                <div class="carousel-caption">
                    <h1>Tecnología y Mantenimiento Predictivo</h1>
                    <p class="lead">Nos anticipamos a las fallas utilizando la tecnología más avanzada del mercado.</p>
                    <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg mt-3">Contáctanos</a>
                </div>
            </div>

        </div>

        {{-- Controles (Flechas de Anterior y Siguiente) --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    {{-- El resto del contenido de la página de inicio va aquí --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Bienvenido a Proserma</h2>
                <p>Somos tu socio estratégico para garantizar la continuidad operativa de tu industria. Con más de [Número]
                    años de experiencia, ofrecemos soluciones a la medida, enfocadas en la eficiencia y la calidad.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/equipo-trabajo.png') }}"
                    class="img-fluid rounded shadow" alt="Equipo Proserma">
            </div>
        </div>
    </div>
@endsection
