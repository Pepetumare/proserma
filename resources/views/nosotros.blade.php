@extends('layout.app')

@section('title', 'Nosotros | Proserma')

@section('content')

{{-- Encabezado de la Página --}}
<div class="bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4">Conoce a Proserma</h1>
        <p class="lead">Somos más que una empresa de mantención; somos su socio estratégico en productividad y seguridad.</p>
    </div>
</div>

{{-- Sección Principal: Nuestra Historia y Compromiso --}}
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h2>Nuestra Trayectoria</h2>
            <p>Desde nuestra fundación en [Año de Fundación], Proserma ha crecido con un objetivo claro: ofrecer soluciones de mantenimiento industrial que no solo resuelven problemas, sino que los previenen. Nacimos de la necesidad de un servicio técnico confiable y proactivo en la industria, y hoy somos un referente de calidad y eficiencia.</p>
            <p>Nuestro equipo está formado por profesionales apasionados por la ingeniería y la optimización de procesos, comprometidos con el éxito de cada uno de nuestros clientes.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/600x400.png/EAEAEA/000000?text=Equipo+de+Proserma+en+terreno" class="img-fluid rounded shadow-lg" alt="Equipo de Proserma trabajando en una planta industrial">
        </div>
    </div>
</div>

{{-- Sección de Misión y Visión --}}
<div class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary">Misión</h3>
                        <p class="card-text">Garantizar la máxima eficiencia y seguridad en las operaciones de nuestros clientes a través de servicios de mantenimiento industrial de excelencia, utilizando tecnología de punta y un equipo humano altamente calificado y comprometido.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary">Visión</h3>
                        <p class="card-text">Ser la empresa líder y el socio estratégico preferido en soluciones de mantenimiento industrial en la región, reconocidos por nuestra innovación, confiabilidad y la capacidad de superar las expectativas de nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Sección de Nuestros Valores --}}
<div class="container my-5">
    <div class="text-center mb-5">
        <h2>Nuestros Valores</h2>
        <p class="lead">Los pilares que guían cada una de nuestras acciones.</p>
    </div>
    <div class="row text-center">
        {{-- Valor 1: Seguridad --}}
        <div class="col-md-3">
            <h4>Seguridad</h4>
            <p>La seguridad de nuestro equipo y del personal de nuestros clientes es nuestra prioridad número uno. Cero accidentes es nuestra meta.</p>
        </div>
        {{-- Valor 2: Calidad --}}
        <div class="col-md-3">
            <h4>Calidad</h4>
            <p>Entregamos un trabajo impecable que cumple con los más altos estándares de la industria, garantizando resultados duraderos.</p>
        </div>
        {{-- Valor 3: Compromiso --}}
        <div class="col-md-3">
            <h4>Compromiso</h4>
            <p>Nos involucramos con los objetivos de nuestros clientes como si fueran los nuestros, asegurando una comunicación transparente y constante.</p>
        </div>
        {{-- Valor 4: Innovación --}}
        <div class="col-md-3">
            <h4>Innovación</h4>
            <p>Buscamos y aplicamos constantemente nuevas tecnologías y métodos para ofrecer el servicio más eficiente y avanzado del mercado.</p>
        </div>
    </div>
</div>

@endsection