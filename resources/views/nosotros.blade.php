@extends('layout.app')

@section('title', 'Nosotros | Proserma')

@section('content')

    {{-- 1. ENCABEZADO DE LA PÁGINA --}}
    <div class="container-fluid text-white text-center py-5"
        style="background: linear-gradient(rgba(26, 35, 126, 0.8), rgba(26, 35, 126, 0.8)), url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1920&auto=format&fit=crop') no-repeat center center; background-size: cover;">
        <div class="py-5">
            <h1 class="display-4">El Equipo Detrás de la Excelencia Industrial</h1>
            <p class="lead">Conoce la experiencia, los valores y las personas que hacen de Proserma su socio de confianza.
            </p>
        </div>
    </div>

    {{-- 2. NUESTRA HISTORIA (TIMELINE) --}}
    <div class="container my-5 py-5">
        <div class="text-center mb-5">
            <h2>Nuestra Trayectoria</h2>
            <p class="lead">Un camino de crecimiento y compromiso constante con la industria.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row g-0 mb-4">
                    <div class="col-md-2 text-center">
                        <div class="h4 text-primary">2019</div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="col-md-10">
                        <h5>Fundación de Proserma</h5>
                        <p>Nacimos de la necesidad de un servicio técnico confiable y proactivo, con el objetivo claro de
                            ofrecer soluciones que previenen problemas, no solo los resuelven.</p>
                    </div>
                </div>
                <div class="row g-0 mb-4">
                    <div class="col-md-2 text-center">
                        <div class="h4 text-primary">2021</div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="col-md-10">
                        <h5>Expansión de Servicios</h5>
                        <p>Incorporamos mantenimiento predictivo y análisis de vibraciones, llevando nuestra oferta
                            tecnológica al siguiente nivel para optimizar los activos de nuestros clientes.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-2 text-center">
                        <div class="h4 text-primary">2024</div>
                    </div>
                    <div class="col-md-10">
                        <h5>Consolidación Regional</h5>
                        <p>Nos consolidamos como un referente de calidad y eficiencia en la región, ampliando nuestro equipo
                            y nuestra cartera de clientes en sectores estratégicos como minería y manufactura.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. MISIÓN Y VISIÓN --}}
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <h3 class="card-title text-primary">Misión</h3>
                        <p class="card-text">Garantizar la máxima eficiencia y seguridad en las operaciones de nuestros
                            clientes a través de servicios de mantenimiento industrial de excelencia, utilizando tecnología
                            de punta y un equipo humano altamente calificado y comprometido.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <h3 class="card-title text-primary">Visión</h3>
                        <p class="card-text">Ser la empresa líder y el socio estratégico preferido en soluciones de
                            mantenimiento industrial en Chile, reconocidos por nuestra innovación, confiabilidad y la
                            capacidad de superar las expectativas de nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- 4. VALORES --}}
    <div class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Nuestros Valores</h2>
                <p class="lead">Los pilares que guían cada una de nuestras acciones.</p>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="h1 text-primary">🛡️</div>
                    <h4>Seguridad</h4>
                    <p>Nuestra prioridad número uno. Cero accidentes es nuestra meta permanente.</p>
                </div>
                <div class="col-md-3">
                    <div class="h1 text-primary">🏆</div>
                    <h4>Calidad</h4>
                    <p>Entregamos un trabajo impecable que cumple con los más altos estándares de la industria.</p>
                </div>
                <div class="col-md-3">
                    <div class="h1 text-primary">🤝</div>
                    <h4>Compromiso</h4>
                    <p>Nos involucramos con los objetivos de nuestros clientes como si fueran los nuestros.</p>
                </div>
                <div class="col-md-3">
                    <div class="h1 text-primary">💡</div>
                    <h4>Innovación</h4>
                    <p>Aplicamos nuevas tecnologías para ofrecer el servicio más eficiente y avanzado.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- 6. LLAMADO A LA ACCIÓN --}}
    <div class="container my-5 py-5 text-center">
        <h2 class="display-5">Confía tu Próximo Proyecto a Nuestro Equipo</h2>
        <p class="lead my-4">Ahora que conoces nuestra historia y nuestro compromiso, déjanos ser parte de la
            tuya.<br>Contáctanos para evaluar tus necesidades y comenzar a trabajar juntos.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Iniciar un Proyecto</a>
    </div>

    {{-- Estilos para la línea del timeline (puedes moverlos a tu archivo SCSS) --}}
    <style>
        .timeline-line {
            height: 100%;
            width: 2px;
            background-color: #dee2e6;
            margin: 0 auto;
        }
    </style>

@endsection
