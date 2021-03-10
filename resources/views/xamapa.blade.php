@extends('layouts.pagina')

@section('title', 'Bienvenidos a Xamapan')

@section('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
@endsection

@section('navbar')
    <nav class="contenedor">
        <div class="logo">
        {{-- <img alt="logo-Sistemas Productivos Xamapan" src="imgs/loge.png"> --}}
        <a href="{{ route('xamapa.index') }}"><img alt="logo-Sistemas Productivos Xamapan" src="imgs/loge.png"></a>
        </div>
            <div class="enlaces">
                <a class="medium" href="#">Inicio</a>
                &nbsp
                <a class="medium" href="#nosotros">Nosotros</a>
                &nbsp
                <a class="medium" href="#productos">Productos</a>
                &nbsp
                <a class="medium" href="#galeria">Galeria</a>
                &nbsp
                <a class="medium" href="#contacto">Contacto</a>
                &nbsp
                <a class="medium" href="{{route('posts.index')}}">Blog</a>
            </div>
        <div class="hamburguesa">
        <img alt="bx-menu" id="hamburguesa" src="imgs/bx-menu-right.svg">
        </div>
    </nav>
@endsection

@section('content')
    {{-- <section class="miSlider" id="home"> --}}
    <section class="Slider" id="inicio">
        {{-- <img src="imgs/croop/granja.png"> --}}
        <div class="head1">
            <h2 class="titulo">Sistemas Productivos Rurales de Jamapa</h2>
            <p class="copy">Producción acuícola</p>
        </div>
    </section> 

    <section class="contenedor2" id="nosotros">
        <h2 class="subtitulo">Nosotros</h2>
        <div class="contenedor-nosotros">
            <div class="checklist-nosotros">
                <div class="nosotros">
                    <h3 class="n-nosotros">
                        <span>
                            ¿Quiénes somos?
                        </span>                        
                    </h3>
                    <p>Somos una empresa dedicada a la producción acuícola y a la prestación de servicios de capacitación, educación, investigación, desarrollo tecnológico y transferencia de tecnologías para el sector acuícola y otros relacionados, con la finalidad de mejorar su eficiencia competitividad y calidad.</p>
                    <p>Colaboramos con instituciones académicas, organizaciones de productores, sector gubernamental y organizaciones de la sociedad civil para el desarrollo de proyectos de investigación y proyectos de incidencia para contribuir al desarrollo de capacidades de los grupos objetivo a escala local, regional y estatal.</p>
                </div>
                <div class="nosotros">
                    <h3 class="n-nosotros">
                        <span>
                            Visión
                        </span>
                    </h3>
                    <p>Ser una organización científica y tecnológica dedicada al desarrollo e implementación de estrategias y soluciones para mejorar la competitividad de los productores, así como de los aspectos sociales y ambientales a diferentes escalas. Así como crear, en colaboración con otras organizaciones e instituciones académicas, un sistema participativo para el desarrollo de estrategias que permitan transitar hacia el bien común y la justicia ambiental.</p>
                </div>
            </div>
            <img alt="" class="img-nosotros" src="imgs/croop/estanque.png">
        </div>
    </section>
    <section class="backgray" id="productos">
        <div class="contenedor2">
            <h2 class="subtitulo">Productos</h2>
            <div class="products">
                <div class="cont-product">
                    <img alt="" class="img-nosotros" src="imgs/croop/tilapia.png">
                    <h3 class="n-product">Tilapia Fresca</h3>
                    <p class="prod-text">Ofrecemos tilapia fresca de primera calidad cultivada a través de procesos eficientes y con la tecnología adecuada de producción para garantizar su seguridad.</p>
                    <button class="conocer">
                        <a href="{{ route('xamapa.show') }}">Conoce más...</a>
                    </button>                    
                </div>
                <div class="cont-product">
                    <img alt="" class="img-nosotros" src="imgs/croop/icon_xamp.png">
                    <h3 class="n-product">Centro de Educación Ambiental Xamapan</h3>
                    <p class="prod-text">Una organización dedicada a ofrecer capacitación y a promover la adopción de prácticas de producción sostenible a través de programas de formación.</p>
                    
                    <button class="conocer">
                        <a href="{{ route('xamapa.show') }}">Conoce más...</a>
                    </button>              
                </div>
            </div>
        </div>
    </section>
    <section id="galeria">
        <div class="contenedor2">
            <h2 class="subtitulo">Galeria</h2>
            <div class="contenedor-galeria">
                <img alt="" class="img-galeria" src="imgs/croop/hidroponia.png">
                <img alt="" class="img-galeria" src="imgs/croop/capacitacion.png">
                <img alt="" class="img-galeria" src="imgs/croop/aereador.png">
                <img alt="" class="img-galeria" src="imgs/croop/practicas.png">
            </div>
        </div>
        <section class="imagen-light">
            <img alt="" class="close" src="imgs/croop/close.svg">
            <img alt="" class="agregar-imagen" src="imgs/croop/capacitacion.png">
        </section>
    </section>
    <section class="backgray" id="contacto">
        <div class="contenedor2">
            <h2 class="subtitulo">Contacto</h2>
            <div class="contenedor-contacto">
                <div class="contenedor-formulario">
                    <form action="https://formspree.io/f/mqkgndel" id="contact-form" method="POST">
                        <div class="grupo">
                            <input id="" name="name" required="" type="text">
                            <span class="bar"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="grupo">
                            <input id="" name="email" required="" type="email">
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>
                        <div class="grupo">
                            <input id="" name="telefono" required="" type="tel">
                            <span class="bar"></span>
                            <label>Telefono</label>
                        </div>
                        <div class="grupo">
                            <textarea id="" name="body" required="" rows="3"></textarea>
                            <span class="bar"></span>
                            <label>Mensaje</label>
                        </div>
                        <button id="enviar" type="submit">Enviar</button>
                        <p id="status"></p>
                    </form>
                </div>                
                <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15086.730511332093!2d-96.2431438328799!3d19.033701720855383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDAxJzI1LjYiTiA5NsKwMTQnNTAuMSJX!5e0!3m2!1ses-419!2smx!4v1612122199195!5m2!1ses-419!2smx" tabindex="0" width="500"></iframe>
            </div>
        </div>        
    </section>    
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection

@section('script')
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/lightbox.js') }}"></script> --}}
@endsection