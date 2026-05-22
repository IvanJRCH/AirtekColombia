<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--<!-- navegadores -->--}}
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon.png')}}">
        {{--<!-- Google y Android -->--}}
        <link rel="icon" type="image/png" sizes="48x48" href="{{url('favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{url('favicon.png')}}">
        {{--<!-- iPad -->--}}
        <link rel="apple-touch-icon" type="image/png" sizes="167x167" href="{{url('favicon.png')}}">
        {{--<!-- iPhone -->--}}
        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{url('favicon.png')}}">
        <title>AirTek Colombia | Proveedores de Internet Fibra Óptica de Ultravelocidad</title>
        <meta name="description" content="Descubre una nueva experiencia de navegación. Internet Ilimitado por Fibra Óptica en colombia."/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{url('css/materialize.min.css')}}"  media="screen,projection"/>
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/splide.min.css')}}">

        <script src="{{url('js/splide.min.js')}}"></script>
        <script src="{{url('js/splide-extension-auto-scroll.min.js')}}"></script>

        <script src="{{url('js/ShadowDom.js')}}"></script>
        <script defer src="{{url('js/alpine3.min.js')}}"></script>
        <script src="{{url('js/htmx2.0.4.min.js')}}"></script>
        <script src="{{url('js/noframework.waypoints.min.js')}}"></script>

        <style>
            .splide__slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
        </style>
    </head>
    <body>
        
    <div class="navbar-fixed" style="height:0px !important;">
        <nav id="menu" class="transicion z-depth-0" style="padding:0px 200px;min-width:300px;padding:20px;height:100px;background:transparent;">
            <div class="nav-wrapper container" style="height:0px;">
            <a href="{{url('/')}}" class="brand-logo color-automatico" style="min-width:150px;"><img class="color-automatico" src="{{url('img/Logo.svg')}}" style="width:90%;"></img></a>
            <a href="#" data-target="mobile" class="sidenav-trigger color-automatico"><i class="material-icons color-automatico">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="#planes" class="color-automatico" style="font-weight:bold;font-size:1.1em;">Planes</a></li>
            <li><a href="#" class="color-automatico" style="font-weight:bold;font-size:1.1em;">TV</a></li>
            <li><a href="#" class="waves-effect waves-light btn blue darken-1" style="border-radius: 20px;font-weight:bold;">Portal de Pagos</a></li>
            </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile">
        <li><a href="#planes" style="color:black;">Planes</a></li>
        <li><a href="#" style="color:black;">TV</a></li>
        <li><a href="#" style="color:black;">Portal de Pagos</a></li>
    </ul>

    <div id="punto" class="seccion black video-background" style="flex-direction: column;">
        <video autoplay muted loop class="video0">
            <source src="{{url('video/homeWeb.mp4')}}" type="video/mp4">
        </video>
        <div id="seccion1_zoom">
            <h2 class="fuente1 titulo1 opaco">Evoluciona a un mund<span class="tooltip" data-tooltip="El mejor internet de colombia"><svg id="colombia" style="transform: translateY(15%);width:5%;" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><g fill-rule="nonzero"><path fill="#4D4D4D" d="M256 0c70.684 0 134.689 28.664 181.013 74.987C483.336 121.311 512 185.316 512 256c0 70.684-28.664 134.689-74.987 181.013C390.689 483.336 326.684 512 256 512c-70.676 0-134.689-28.664-181.013-74.987C28.664 390.689 0 326.676 0 256c0-70.684 28.664-134.689 74.987-181.013C121.311 28.664 185.316 0 256 0z"/><path fill="#fff" d="M256.001 19.597c65.277 0 124.381 26.46 167.161 69.242 42.782 42.78 69.242 101.884 69.242 167.161s-26.462 124.382-69.242 167.161c-42.78 42.78-101.884 69.243-167.161 69.243s-124.382-26.46-167.161-69.243C46.057 380.382 19.597 321.277 19.597 256s26.46-124.381 69.24-167.163c42.782-42.78 101.887-69.24 167.164-69.24z"/><path fill="#CE1126" d="M442.987 364.987c-37.529 64.25-107.213 107.42-186.986 107.42-79.777 0-149.457-43.17-186.986-107.42h373.972z"/><path fill="#003893" d="M442.987 364.987H69.015C50.319 332.981 39.594 295.745 39.594 256l432.813-.005c0 38.397-10.052 75.832-29.42 108.992z"/><path fill="#FCD116" d="M472.407 255.995H39.594c.003-119.518 96.889-216.401 216.407-216.401 119.515 0 216.404 96.883 216.406 216.401z"/></g></svg></span><br>sin límites</h2>
            <p class="subtitulo opaco"><span>Descubre la experiencia Airtek de hasta 1 Gbps. Internet ilimitado<span><br><span style="font-size:0.9em;">de Ultravelocidad por <b>COP 100.000,00</b> o $25/mes con Instalación GRATIS.</span></p>
            
            <a href="#" class="waves-effect waves-light btn white opaco botonPrecentacion" type="button">
            ¡Lo Quiero!
            </a>
        </div>
    </div>

    <div class="fixed-action-btn">
        {{-- Boton flotante --}}
        <a class="btn-floating btn-large transparent boton_flotante" style="width:90px;height:90px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 99 99" fill="none"><g clip-path="url(#clip0_2704_629)"><path d="M49.33 98.66C76.5742 98.66 98.66 76.5742 98.66 49.33C98.66 22.0858 76.5742 0 49.33 0C22.0858 0 0 22.0858 0 49.33C0 76.5742 22.0858 98.66 49.33 98.66Z" fill="#15151F"></path><path d="M38.7402 38.25H30.7202V60.4H38.7402V38.25Z" fill="#7200EA"></path><path d="M47.7701 38.25H21.3301V43.71H47.7701V38.25Z" fill="#0E6EFA"></path><path d="M53.9502 38.25L63.3502 60.4H55.6802L45.1802 38.25H53.9502Z" fill="#21C0FA"></path><path d="M77.3199 38.25H68.5299L59.1299 60.4H66.6499L77.3199 38.25Z" fill="white"></path></g><defs><clipPath id="clip0_2704_629"><rect width="98.65" height="98.65" fill="white"></rect></clipPath></defs></svg>
        </a>
        <ul class="social-icons" style="margin-bottom:20px;">
            {{-- redes sociales flotantes --}}
            <li><a href="https://www.facebook.com" class="btn-floating blue" style="padding:5px;" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" fill="white" width="100%" height="100%" viewBox="0 0 512 512" role="img" class="Socials_socialsIcon__eYz4V"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a></li>
            <li><a href="https://www.instagram.com" class="btn-floating pink" style="padding:5px;" target="_blank"><svg fill="white" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 448 512" class="Socials_socialsIcon__eYz4V"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a></li>
            <li><a href="https://twitter.com" class="btn-floating black" style="padding:5px;" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 509.64"><rect width="512" height="509.64" rx="115.61" ry="115.61"/><path fill="#fff" fill-rule="nonzero" d="M323.74 148.35h36.12l-78.91 90.2 92.83 122.73h-72.69l-56.93-74.43-65.15 74.43h-36.14l84.4-96.47-89.05-116.46h74.53l51.46 68.04 59.53-68.04zm-12.68 191.31h20.02l-129.2-170.82H180.4l130.66 170.82z"/></svg></a></li> <!-- Cambiado a twitter -->
            <li><a href="https://www.youtube.com" class="btn-floating red" style="padding:5px;" target="_blank"><svg fill="white" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 576 512" class="Socials_socialsIcon__eYz4V"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a></li>
            <li><a href="https://telegram.org" class="btn-floating blue" style="padding:5px;" target="_blank"><svg fill="white" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"  viewBox="0 0 496 512" class="Socials_socialsIcon__eYz4V"><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"></path></svg></a></li> <!-- Usando un ícono de burbuja de chat como representación de Telegram -->
        </ul>
    </div>
      
    <div class="seccion black lighten-4 video-background" style="flex-direction: column;">
          <div style="width:100%;height:100vh;border-radius:80px;padding:70px;" class="white"> 
            
            <div style="width:95%;max-width:1950px;margin:0px auto;">
                <a name="planes"></a>
                <h2 class="fuente1">Internet para ganar</h2>
                <p class="fuente1" style="width:50%;margin:0px auto;margin-bottom:50px;">¡Descubre nuestros planes diseñados para ti!<br>Que Satisfacen las necesidades de familias y empresas.<br>Disfruta de una conexión confiable y sin límites.</p>
       
                <div class="splide" data-splide='{"type":"loop","perPage":2,"height":"50vh","pagination":false,"autoScroll":{"speed":2}}' role="group" >
                    <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="precios_card">
                                        <img src="{{url('img/velocidad-up-and-down.jpg')}}" loading="lazy" alt="velocidad"></img>
                                        <div>
                                        <h2 class="fuente1">Free</h2>
                                        <h3 class="fuente2">$25</h3>
                                        <p>1 User</p>
                                        <p>Basic Support</p>
                                        <p>All Core Features</p>
                                        <button href="#" class="waves-effect waves-light btn transicion" style="">Contratar</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="precios_card">
                                        <img src="{{url('img/airtektv.jpg')}}" loading="lazy" alt="airtektv"></img>
                                        <div>
                                        <h2 class="fuente1">Starter</h2>
                                        <h3 class="fuente2">$19</h3>
                                        <p>5 User</p>
                                        <p>Basic Support</p>
                                        <p>All Core Features</p>
                                        <button href="#" class="waves-effect waves-light btn transicion" style="">Contratar</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="precios_card">
                                        <img src="{{url('img/mayor-velocidad.jpg')}}" loading="lazy" alt="mayor velocidad"></img>
                                        <div>
                                        <h2 class="fuente1">Enterprise</h2>
                                        <h3 class="fuente2">$49</h3>
                                        <p>100 User</p>
                                        <p>Basic Support</p>
                                        <p>All Core Features</p>
                                        <button href="#" class="waves-effect waves-light btn transicion" style="">Contratar</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="precios_card">
                                        <img src="{{url('img/todos-conectados.jpg')}}" loading="lazy" alt="todos conectados"></img>
                                        <div>
                                        <h2 class="fuente1">Free</h2>
                                        <h3 class="fuente2">$25</h3>
                                        <p>1 User</p>
                                        <p>Basic Support</p>
                                        <p>All Core Features</p>
                                        <button href="#" class="waves-effect waves-light btn transicion" style="">Contratar</button>
                                        </div>
                                    </div>
                                </li>
                                </li>
                                <li class="splide__slide">
                                    <div class="precios_card">
                                        <img src="{{url('img/streaming-4k.jpg')}}" loading="lazy" alt="streaming 4k"></img>
                                        <div>
                                        <h2 class="fuente1">Free</h2>
                                        <h3 class="fuente2">$25</h3>
                                        <p>1 User</p>
                                        <p>Basic Support</p>
                                        <p>All Core Features</p>
                                        <button href="#" class="waves-effect waves-light btn transicion" style="">Contratar</button>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                    </div>
                </div>
            </div>


         </div>
    </div>


    <div class="seccion black" style="position:relative;flex-direction: column;">
        <video autoplay muted loop class="video0">
            <source src="{{url('video/planesConsulta.mp4')}}" type="video/mp4">
        </video>
        <div id="seccion1_zoom">
        
            <h2 class="fuente1 titulo1 opaco">Internet para todo<br>lo que amas</h2>
            <p class="subtitulo opaco"><span>Ingresa la dirección donde quieres instalar el servicio.<span></p>
            
            <a href="#" class="waves-effect waves-light btn white opaco botonPrecentacion" style="width:auto;" type="button">
            Consulta la disponibilidad
            </a>
        </div>
    </div>
         

    <script>
    var splide0 = null;
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {edge:'left'});

        var elems2 = document.querySelectorAll('.fixed-action-btn');
        var instances2 = M.FloatingActionButton.init(elems2, {direction:'top'});

        splide0 = new Splide( '.splide', {
            autoScroll: {
                speed: 2,
            },
        } );
        splide0.mount(window.splide.Extensions);
        cambiarSize();
    });
    var waypoint = new Waypoint({
    element: document.getElementById('punto'),
        handler: function(direccion) {
            if( direccion == 'down' ) {
                menu.className = "transicion z-depth-0 white";
            }else
            if(direccion == 'up') {
                menu.className = "transicion z-depth-0 transparent";
            }
        },
        offset: -100
    });
    function cambiarSize() {
        const screenWidth = window.innerWidth;

        if (screenWidth <= 777) {
            splide0.options = {
                ...splide0.options,
                perPage: 1,
            };
        } else {
            splide0.options = {
                ...splide0.options,
                perPage: 2,
            };
        }
    }
     window.addEventListener('resize', cambiarSize);
    </script>
    <script src="{{url('js/materialize.min.js')}}"></script>
    </body>
</html>
