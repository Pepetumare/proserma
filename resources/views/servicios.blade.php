@extends('layout.app')

@section('title', 'Servicios | Proserma')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1>Nuestros Servicios</h1>
        <p class="lead">Soluciones precisas para cada necesidad de su industria.</p>
    </div>

    <div class="row g-4">
        {{-- Servicio 1: Mantención Preventiva --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Mantención Preventiva</h3>
                    <p class="card-text">Planificamos y ejecutamos inspecciones periódicas para anticiparnos a las fallas, reducir tiempos de inactividad y prolongar la vida útil de sus equipos.</p>
                </div>
            </div>
        </div>
        {{-- Servicio 2: Mantención Correctiva --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Mantención Correctiva</h3>
                    <p class="card-text">Respondemos con rapidez y eficacia para solucionar fallas imprevistas, minimizando el impacto en su producción.</p>
                </div>
            </div>
        </div>
        {{-- Servicio 3: Mantención Predictiva --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Análisis Predictivo</h3>
                    <p class="card-text">Utilizamos tecnología de monitoreo de condición (vibraciones, termografía) para predecir fallas antes de que ocurran.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection