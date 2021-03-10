@extends('layouts.pagina')

@section('title', 'Productos - Xamapan')

@section('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
@endsection

@section('navbar')
    {{-- @include('layouts.partials.nav') --}}
@endsection

@section('content')
    <section class="contenedor-dashboard">
        @include('layouts.partials.sidebar')
        <section class="contenido" id="contenido">
            {{-- Lo que se vera en pantalla --}}            
            <section class="tab_wrap" style="display: none;"> 
            </section>
            <section class="tab_wrap" style="display: block;"> 
                <img alt="" class="img-xamapan" src="imgs/croop/tilapia.png">                
                <div class="contenedor-xamapan">                    
                    <div class="nosotros-cap">                                                
                        <h4 class="n-cap">
                            <div class="number">
                                >
                            </div>
                            <span>
                                Acerca de nuestra tilapia
                            </span>                        
                        </h4>
                        <p>Somos una organización dedicada a ofrecer capacitación y a promover la adopción de prácticas de producción sostenibles a través de programas de formación para la población y para los diferentes sectores productivos con la finalidad de fortalecer el desarrollo de capacidades de comunicación, organización y administración contribuyendo a la preservación del ambiente y al desarrollo comunitario. </p>
                        <p>Desarrollamos y colaboramos en proyectos en el desarrollo de proyectos de investigación en incidencia con otras organizaciones públicas y privadas e instituciones de educación superior.</p>
                    </div> 
                </div>
            </section>
            <section class="tab_wrap" style="display: none;"> 
                <img alt="" class="img-xamapan" src="imgs/croop/xamapan.png">                
                <div class="contenedor-xamapan">
                    <div class="nosotros-cap">
                        <h4 class="n-cap">
                            <div class="number">
                                >
                            </div>
                            <span>
                                ¿Quiénes somos?
                            </span>                        
                        </h4>
                        <p>Somos una organización dedicada a ofrecer capacitación y a promover la adopción de prácticas de producción sostenibles a través de programas de formación para la población y para los diferentes sectores productivos con la finalidad de fortalecer el desarrollo de capacidades de comunicación, organización y administración contribuyendo a la preservación del ambiente y al desarrollo comunitario. </p>
                        <p>Desarrollamos y colaboramos en proyectos en el desarrollo de proyectos de investigación en incidencia con otras organizaciones públicas y privadas e instituciones de educación superior. </p>
                    </div> 
                </div>
            </section>
            <section class="tab_wrap" style="display: none;">                 
                <div class="contenedor-xamapan">
                    <div class="capacitacion">
                        <div class="cont-cap">
                            <div class="full-cap">
                                <img alt="" src="imgs/croop/hidroponia.png">
                                <h5 class="n-capa">Sistemas productivos sostenibles</h5>
                            </div>
                            
                        </div>
                        <div class="cont-cap">
                            <div class="full-cap">
                                <img alt="" src="imgs/croop/eficiencia.png">
                                <h5 class="n-capa">Eficiencia energética</h5>                  
                            </div>
                        </div>
                        <div class="cont-cap">
                            <div class="full-cap">
                                <img alt="" src="imgs/croop/capacidades.png">
                                <h5 class="n-capa">Fortalecimiento de capacidades organizativas y administrativas</h5>
                            </div>
                        </div>               
                    </div>                     
                </div>
            </section>
            <section class="tab_wrap" style="display: none;">                 
                <div class="contenedor-xamapan">
                    <div class="nosotros-cap">                        
                        <h4 class="n-inv">
                            <span>
                                Sistema Para la Gestión Integral del ciclo socio-natural del agua en la Cuenca Hidrológica Jamapa
                            </span>                     
                        </h4>
                        <p></p>
                        <a href="#">Accede al sitio...</a>                        
                    </div>
                    <br>
                    <div class="nosotros-cap">                        
                        <h4 class="n-inv">
                            <span>
                                Sistema de servicios energéticos y modelos cognitivos compartidos como estrategia para mitigar el cambio climático y facilitar la transición energética
                            </span>                     
                        </h4>
                        <p>El proyecto tiene como objetivo construir un sistema de servicios energéticos basado redes de sensores inalámbricos opensource para reducir los consumos energéticos en los sectores doméstico y primario del estado de Veracruz, que, además, permita construir participativamente modelos cognitivos compartidos multi-actor como base para el diseño de estrategias que aceleren la transición energética. </p>
                    </div> 
                </div>
            </section>
            <section class="tab_wrap" style="display: none;">                 
                <div class="contenedor-xamapan">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                <h6> Curso de Biofloc </h6> 
                            </a>
                             <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <h6> Introducción a la Acuaponia </h6>                                 
                            </a>
                             <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <h6> Manual de Bifloc</h6>
                                
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="cont-educacion">
                                <div class="div_contenedor">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLNdA-Whm8Zg-hq0_Nd__LxskMj-5VOR2i" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>                            
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <P>...</P>
                        </div>                           
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <P>...</P>
                        </div>                          
                    </div>
                </div>
            </section>
            <section class="tab_wrap" style="display: block;">                 
                <div class="contenedor-calendario">
                    <div class="full-calendario">
                        <div id="calendar"> </div>
                        <br>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-none">
                                    ID: 
                                    <input type="text" name="txtID" id="txtID">
                                    <br>
                                    Fecha:
                                    <input type="text" name="txtFecha" id="txtFecha">
                                    <br>
                                </div>
                        
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label>Titulo:</label> 
                                            <input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Hora:</label> 
                                            <input type="time" min="07:00" max="19:00" step="600" class="form-control" name="txtHora" id="txtHora">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Descripcion:</label> 
                                            <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" cols="30" rows="3"></textarea>
                                        </div>
                                        {{-- <div class="form-group col-md-12">
                                            <label>Color:</label> 
                                            <input type="color" class="form-control" name="txtColor" id="txtColor">
                                        </div>    --}}
                                    </div>
                                    
                                </div>
                                {{-- <div class="modal-footer">                                
                                    <button id="btnAgregar" class="btn btn-success">Agregar</button>
                                    <button id="btnModificar" class="btn btn-success">Modificar</button>
                                    <button id="btnEliminar" class="btn btn-danger">Eliminar</button>
                                    <button id="btnCancelar" data-dismiss="modal" class="btn btn-primary">Cancelar</button>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>                      
                </div>
            </section>                           
        </section>                                    
        </section>
    </section>
 @endsection

@section('script')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script> 
    <script src="{{ asset('js/fullcalendar.js') }}"></script>
    <script>
        var url_show="{{ route('xamapa.data') }}";
    </script>
    <script src="{{ asset('js/events_xam.js') }}"></script> 
@endsection