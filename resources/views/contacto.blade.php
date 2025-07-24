@extends('layout.app')

@section('title', 'Contacto | Proserma')

@section('content')

    {{-- 1. ENCABEZADO DE LA PÁGINA --}}
    <div class="container-fluid text-center py-5 bg-light">
        <h1 class="display-4">Estamos Aquí para Ayudarle</h1>
        <p class="lead">Contáctenos para cotizaciones, emergencias o para evaluar sus necesidades de mantenimiento.</p>
    </div>


    {{-- 2. SECCIÓN PRINCIPAL DE CONTACTO --}}
    <div class="container my-5 py-5">
        <div class="row">

            {{-- COLUMNA DEL FORMULARIO --}}
            <div class="col-lg-7">
                <h3>Envíanos un Mensaje</h3>
                <p>Complete el siguiente formulario y nuestro equipo se pondrá en contacto con usted a la brevedad.</p>

                {{-- El action ahora apunta a una ruta que debes crear en routes/web.php --}}
                {{-- Se agregaron los atributos 'name' a cada input, que son necesarios para enviar los datos --}}
                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="empresa" class="form-label">Empresa (Opcional)</label>
                        <input type="text" class="form-control" id="empresa" name="empresa">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">¿En qué podemos ayudarle?</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
                </form>
            </div>

            {{-- COLUMNA DE INFORMACIÓN DIRECTA --}}
            <div class="col-lg-5 ps-lg-5 mt-5 mt-lg-0">
                <div class="p-4 rounded" style="background-color: #f8f9fa;">
                    <h3>Información de Contacto</h3>
                    <p>También puede contactarnos directamente a través de los siguientes canales:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <strong class="h4 me-3 text-primary">📞</strong>
                            <div>
                                <strong>Teléfono</strong><br>
                                <a href="tel:+56978532595" class="text-decoration-none text-dark">+56 9 7853 2595</a>
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <strong class="h4 me-3 text-primary">📧</strong>
                            <div>
                                <strong>Email</strong><br>
                                <a href="mailto:contacto@proserma.cl"
                                    class="text-decoration-none text-dark">contacto@proserma.cl</a>
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <strong class="h4 me-3 text-primary">📍</strong>
                            <div>
                                <strong>Dirección</strong><br>
                                Sector Santa Rosa Norte, San José de la Mariquina
                            </div>
                        </li>
                        <li class="d-flex">
                            <strong class="h4 me-3 text-primary">⏰</strong>
                            <div>
                                <strong>Horario de Atención</strong><br>
                                Lunes a Viernes: 08:30 - 18:00 hrs
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- 3. MAPA DE UBICACIÓN --}}
    <div class="container-fluid px-0">
        {{-- Reemplaza el 'src' con el código de "Insertar un mapa" de Google Maps para tu dirección --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.1339090539927!2d-72.95731273040259!3d-39.54752839822454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9615bb6d5cee5f99%3A0xade1da48e0f8127d!2sVGS%20Primax!5e0!3m2!1ses!2scl!4v1753393808219!5m2!1ses!2scl"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    {{-- 4. PREGUNTAS FRECUENTES (FAQ) --}}
    <div class="container my-5 py-5">
        <div class="text-center mb-5">
            <h2>Preguntas Frecuentes</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                ¿Atienden emergencias fuera del horario de oficina?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <strong>Sí.</strong> Contamos con un servicio de atención de emergencias 24/7 para nuestros
                                clientes con contrato de mantenimiento. Entendemos que las fallas críticas no tienen horario
                                y nuestro equipo está preparado para responder.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Cuál es su área de cobertura geográfica?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Nuestra base de operaciones se encuentra en San José de la Mariquina, pero ofrecemos servicios en toda la Región de los Ríos y realizamos proyectos en otras regiones del país según la envergadura
                                y planificación. Contáctenos para evaluar su caso específico.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Cómo es el proceso para solicitar una cotización?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Puede completar el formulario en esta página, enviarnos un correo o llamarnos. Uno de
                                nuestros ingenieros se pondrá en contacto para entender sus requerimientos, agendar una
                                visita técnica si es necesario, y luego le enviaremos una propuesta técnico-económica
                                detallada.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
