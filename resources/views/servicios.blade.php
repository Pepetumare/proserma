@extends('layout.app')

@section('title', 'Servicios | Proserma')

@section('content')

    {{-- 1. ENCABEZADO DE LA PÁGINA DE SERVICIOS --}}
    <div class="container-fluid text-white text-center py-5"
        style="background: linear-gradient(rgba(26, 35, 126, 0.8), rgba(26, 35, 126, 0.8)), url('https://images.unsplash.com/photo-1517077304055-6e89abbf0920?q=80&w=1920&auto=format&fit=crop') no-repeat center center; background-size: cover;">
        <div class="py-5">
            <h1 class="display-4">Nuestros Servicios de Mantenimiento</h1>
            <p class="lead">Ingeniería, tecnología y experiencia para potenciar la productividad de su industria.</p>
        </div>
    </div>

    {{-- INTRODUCCIÓN --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <p class="lead">En Proserma, ofrecemos un portafolio de servicios diseñado para cubrir el ciclo de vida
                    completo de sus activos industriales. Nuestro enfoque no es solo reparar, sino optimizar, prevenir y
                    garantizar que su operación funcione con la máxima eficiencia y seguridad en todo momento.</p>
            </div>
        </div>
    </div>


    {{-- 2. DETALLE DE SERVICIOS PRINCIPALES --}}
    <div class="container my-5">

        {{-- SERVICIO 1: MANTENIMIENTO PREVENTIVO --}}
        <div class="row align-items-center mb-5 pb-5 border-bottom">
            <div class="col-lg-6">
                <img src="{{ asset('img/mant-prev.png') }}"
                    class="img-fluid rounded shadow" alt="Planificación de Mantenimiento Preventivo">
            </div>
            <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                <h2 class="h1">Mantenimiento Preventivo</h2>
                <p>Nos anticipamos a las fallas. Diseñamos y ejecutamos planes de mantenimiento programados y rigurosos,
                    basados en las recomendaciones del fabricante y las condiciones operativas de sus equipos. El objetivo
                    es simple: evitar que los problemas ocurran.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2">✅ Reducción significativa de paradas no planificadas.</li>
                    <li class="mb-2">✅ Extensión de la vida útil de sus activos críticos.</li>
                    <li class="mb-2">✅ Optimización de costos de reparación a largo plazo.</li>
                    <li>✅ Aumento de la seguridad y fiabilidad de la planta.</li>
                </ul>
            </div>
        </div>

        {{-- SERVICIO 2: MANTENIMIENTO PREDICTIVO --}}
        <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
            <div class="col-lg-6">
                <img src="{{ asset('img/anal-pred.png') }}"
                    class="img-fluid rounded shadow" alt="Análisis de datos predictivos">
            </div>
            <div class="col-lg-6 pe-lg-5 mt-4 mt-lg-0">
                <h2 class="h1">Análisis Predictivo</h2>
                <p>Utilizamos la tecnología para escuchar lo que sus máquinas nos dicen. A través de técnicas de monitoreo
                    de condición como análisis de vibraciones, termografía infrarroja y análisis de aceites, detectamos
                    síntomas de fallas en etapas tempranas, permitiendo programar intervenciones antes de que ocurra una
                    avería catastrófica.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2">✅ Detección temprana de anomalías y desgaste.</li>
                    <li class="mb-2">✅ Intervenciones basadas en la condición real del equipo.</li>
                    <li class="mb-2">✅ Maximización del tiempo de actividad y producción.</li>
                    <li>✅ Ahorro en compra de repuestos y reparaciones mayores.</li>
                </ul>
            </div>
        </div>

        {{-- SERVICIO 3: MANTENIMIENTO CORRECTIVO --}}
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=1200&auto=format&fit=crop"
                    class="img-fluid rounded shadow" alt="Técnico realizando una reparación urgente">
            </div>
            <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                <h2 class="h1">Mantenimiento Correctivo</h2>
                <p>Cuando ocurre lo inesperado, nuestro equipo responde con la urgencia y pericia que su operación necesita.
                    Ofrecemos un servicio de diagnóstico y reparación ágil y eficaz para restaurar la operatividad de sus
                    equipos en el menor tiempo posible, minimizando el impacto en su producción y analizando la causa raíz
                    para evitar recurrencias.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2">✅ Respuesta rápida y disponibilidad 24/7 para emergencias.</li>
                    <li class="mb-2">✅ Diagnóstico preciso para una solución efectiva.</li>
                    <li class="mb-2">✅ Técnicos especialistas en una amplia gama de equipos.</li>
                    <li>✅ Análisis de causa raíz para mejorar la fiabilidad futura.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 3. METODOLOGÍA DE TRABAJO --}}
    <div class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Nuestro Enfoque de Trabajo</h2>
                <p class="lead">Un proceso claro y profesional para garantizar resultados de excelencia.</p>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <h4><span class="text-primary h2">01.</span> Diagnóstico</h4>
                    <p>Levantamiento y análisis detallado de sus necesidades y el estado de sus equipos.</p>
                </div>
                <div class="col-md-3">
                    <h4><span class="text-primary h2">02.</span> Planificación</h4>
                    <p>Diseño de una estrategia de mantenimiento a la medida, definiendo alcances y plazos.</p>
                </div>
                <div class="col-md-3">
                    <h4><span class="text-primary h2">03.</span> Ejecución</h4>
                    <p>Implementación del plan con los más altos estándares de calidad y seguridad.</p>
                </div>
                <div class="col-md-3">
                    <h4><span class="text-primary h2">04.</span> Optimización</h4>
                    <p>Entrega de reportes y recomendaciones para la mejora continua de su operación.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- 4. LLAMADO A LA ACCIÓN FINAL --}}
    <div class="container my-5 py-5 text-center">
        <h2 class="display-5">¿Interesado en un Servicio Específico?</h2>
        <p class="lead my-4">Permítenos asesorarte. Contáctanos para obtener más detalles sobre nuestras soluciones<br>y
            cómo podemos ayudar a tu empresa a alcanzar sus objetivos.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Contactar a un Especialista</a>
    </div>

@endsection
