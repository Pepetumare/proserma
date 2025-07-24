@extends('layout.app')

@section('title', 'Inicio | Proserma - Soluciones en Mantención Industrial')

@section('content')

    {{-- 1. SECCIÓN HERO (CARRUSEL - TU CÓDIGO) --}}
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/Soluciones.png') }}" class="d-block w-100" alt="Maquinaria industrial moderna">
                <div class="carousel-caption">
                    <h1 class="display-3">Soluciones Integrales en Mantención Industrial</h1>
                    <p class="lead">Optimizamos la productividad y seguridad de su planta con servicios de vanguardia.</p>
                    <a href="{{ route('servicios') }}" class="btn btn-primary btn-lg mt-3">Conoce Nuestros Servicios</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/calidad.png') }}" class="d-block w-100" alt="Técnico trabajando con seguridad">
                <div class="carousel-caption">
                    <h1>Compromiso con la Seguridad y Calidad</h1>
                    <p class="lead">Equipos de profesionales altamente calificados para garantizar la continuidad de tu
                        operación.</p>
                    <a href="{{ route('nosotros') }}" class="btn btn-primary btn-lg mt-3">Sobre Nosotros</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/mantenimiento.png') }}" class="d-block w-100" alt="Análisis predictivo industrial">
                <div class="carousel-caption">
                    <h1>Tecnología y Mantenimiento Predictivo</h1>
                    <p class="lead">Nos anticipamos a las fallas utilizando la tecnología más avanzada del mercado.</p>
                    <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg mt-3">Contáctanos</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span><span
                class="visually-hidden">Siguiente</span>
        </button>
    </div>


    {{-- 2. PROPUESTA DE VALOR (TEXTO MEJORADO Y CENTRADO) --}}
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5">Tu Aliado Estratégico en Mantención Industrial</h2>
                <p class="lead mt-4">
                    En Proserma, entendemos que cada minuto de operación cuenta. No somos solo un proveedor de servicios;
                    somos el socio estratégico que se integra a tu equipo para garantizar la <strong>máxima continuidad y
                        eficiencia</strong> de tu industria.
                    <br><br>
                    Con más de 5 años de experiencia, diseñamos soluciones a la medida que se anticipan a los problemas,
                    optimizan el rendimiento de tus activos y extienden su vida útil. Nuestro compromiso es simple: entregar
                    un servicio de <strong>calidad y seguridad inquebrantable</strong> que te permita enfocarte en lo que
                    mejor sabes hacer: producir.
                </p>
            </div>
        </div>
    </div>


    {{-- 3. RESUMEN DE SERVICIOS --}}
    <div class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Soluciones Integrales para Cada Desafío Industrial</h2>
                <p class="lead">Desde la prevención hasta la respuesta inmediata.</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm border-0 p-4">
                        <h3 class="h1 mb-3">📅</h3>
                        <h4 class="h5">Mantenimiento Preventivo</h4>
                        <p>Planes programados para anticipar fallas, reducir costos y asegurar la fiabilidad de tus equipos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm border-0 p-4">
                        <h3 class="h1 mb-3">📈</h3>
                        <h4 class="h5">Mantenimiento Predictivo</h4>
                        <p>Utilizamos tecnología de monitoreo para predecir problemas antes de que ocurran y afectar tu
                            operación.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm border-0 p-4">
                        <h3 class="h1 mb-3">🛠️</h3>
                        <h4 class="h5">Mantenimiento Correctivo</h4>
                        <p>Respuesta rápida y eficaz para solucionar fallas imprevistas, minimizando el impacto en tu
                            producción.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm border-0 p-4">
                        <h3 class="h1 mb-3">⚙️</h3>
                        <h4 class="h5">Proyectos y Maestranza</h4>
                        <p>Diseño, fabricación y montaje de componentes y estructuras para optimizar tus instalaciones.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('servicios') }}" class="btn btn-dark btn-lg">Ver Todos los Servicios</a>
            </div>
        </div>
    </div>


    {{-- 4. ¿POR QUÉ ELEGIRNOS? --}}
    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/equipo-trabajo.png') }}" class="img-fluid rounded shadow-lg"
                    alt="Equipo de trabajo de Proserma">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 ps-lg-5">
                <h2 class="h1">Compromiso que Genera Resultados</h2>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex mb-4">
                        <strong class="h3 me-3 text-primary">🛡️</strong>
                        <div>
                            <h5>Seguridad Como Prioridad</h5>
                            <p class="mb-0">Implementamos los más altos estándares para proteger a tu personal, tus
                                activos y a nuestro equipo.</p>
                        </div>
                    </li>
                    <li class="d-flex mb-4">
                        <strong class="h3 me-3 text-primary">⏱️</strong>
                        <div>
                            <h5>Experiencia Comprobada</h5>
                            <p class="mb-0">Con más de 5 años en terreno, hemos resuelto los desafíos más complejos de la
                                industria.</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <strong class="h3 me-3 text-primary">🎯</strong>
                        <div>
                            <h5>Soluciones a la Medida</h5>
                            <p class="mb-0">No ofrecemos paquetes, creamos soluciones. Analizamos tu operación para
                                diseñar un plan perfecto para ti.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{-- 6. LLAMADO A LA ACCIÓN FINAL --}}
    <div class="container my-5 py-5 text-center">
        <h2 class="display-5">¿Listo para Llevar su Mantenimiento al Siguiente Nivel?</h2>
        <p class="lead my-4">Hablemos de tus desafíos. Permítenos realizar una evaluación sin costo y demostrarte cómo
            podemos optimizar la<br>confiabilidad y eficiencia de tu operación.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Solicitar una Cotización</a>
    </div>

@endsection
