@extends('layout')
@section('content')
    <section class="hero" id="inicio">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Ingeniero en computación</h1>
                <p>Desarrollador de Software <br>Comprometido con el crecimiento profesional, disfruto creando soluciones
                    innovadoras a través del código. Busco perfeccionar mis habilidades en desarrollo mientras diseño y
                    construyo aplicaciones funcionales y eficientes.</p>
                <a href="#proyectos" class="cta-button">Ver Proyectos</a>
            </div>
            <div class="hero-image">
                <img src="{{asset('images/profile.jpg')}}" alt="Foto de perfil">
            </div>
        </div>
    </section>

    <section class="projects" id="proyectos">
        <div class="projects-grid">
            @forelse($proyectos as $proyecto)
                <div class="project-card">
{{--                    <div class="project-image">{{$proyecto->image}}</div>--}}
                    <div class="project-image">
                        <img src="{{ asset('images') . '/' . $proyecto->url_imagen}}" alt="prueba"></div>
                    <div class="project-info">
                        <h3>{{$proyecto->nombre}}</h3>
                        <p>{{$proyecto->descripcion_corta}}</p>
                    </div>
                </div>
            @empty
                <div class="project-card">
                    <div class="project-image">Sin proyectos</div>
                    <div class="project-info">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <section class="skills" id="habilidades">
        <div class="skills-content">
            <h2>Habilidades Técnicas</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <h3>Frontend</h3>
                    <p>Html5 Js Angular</p>
                </div>
                <div class="skill-item">
                    <h3>Backend</h3>
                    <p>Php Laravel </p>
                </div>
                <div class="skill-item">
                    <h3>Database</h3>
                    <p>Postgresql Mysql SqlServer</p>
                </div>
                <div class="skill-item">
                    <h3>DevOps</h3>
                    <p>Linux</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contacto">
        <div class="contact-content">
            <h2>¿Iniciamos un proyecto juntos?</h2>
            <p>Estoy disponible para nuevos proyectos y colaboraciones</p>
            <div class="social-links">
                <a href="#">GitHub</a>
                <a href="#">Contacto</a>
            </div>
        </div>
    </section>
@endsection
