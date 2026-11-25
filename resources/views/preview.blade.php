<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ÉLYSÉA</title>  
    <link rel="stylesheet" href="{{ asset('css/styles-responsive.css') }}">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{ asset('icons/logo_vectorizado.svg') }}">
                ÉLYSÉA
                </a>
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="{{ asset('icons/main.svg') }}">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                        <li class="nav-item">
                            <img src="{{ asset('icons/fav.svg') }}">
                            <a class="nav-link" href="#">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <img src="{{ asset('icons/card.svg') }}">
                            <a class="nav-link" href="#">Carrito</a>
                        </li>
                        <li class="nav-item">
                            <img src="{{ asset('icons/search.svg') }}">
                            <a class="nav-link disabled" aria-disabled="true">Buscar</a>
                        </li>
                </ul>
            </div>
            
            <div class="btn-log-primary">
                <a href="{{ route('login') }}" class="btn btn-log" title="Iniciar sesión" aria-label="Iniciar sesión">
                    <img src="{{ asset('icons/log-in.svg') }}" alt=""></a>
            </div>
        </nav>

        <div class="container">
            <section class="hero-video">
                <video
                    class="hero-video__media"
                    autoplay
                    muted
                    loop
                    playsinline>
        <source src="{{ asset('videos/banner.mp4') }}" type="video/mp4">    </video>
            <div class="hero-video__overlay"></div>
                <div class="hero-video__content">
                <h1>Bienvenido a ÉLYSÉA</h1>
                    <p>La elegancia está en cada detalle.</p>
                </div>
            </div>
            </section>
        </div>


    </header>   


























<footer>
    
    <div class="footer-content">
        <p>&copy; 2024 ÉLYSÉA. Todos los derechos reservados.</p>
        <ul class="footer-links">
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="#">Términos de servicio</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>

        <section class="footer-section-one"> 
            <h3> Ayuda</h3>
            <div class="fotter-section-one_content">
                <ul>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Envíos y devoluciones</a></li>
                    <li><a href="#">Métodos de pago</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Garantia</a></li>
                </ul>
            </div>
        </section>

        <section class="footer-section-two">
            <h3> Contáctanos</h3>
            <div class="fotter-section-two_content">
                <ul>
                    <li><a href="#">Correo electrónico: info@elysea.com</a></li>
                    <li><a href="#">Teléfono: +1 (555) 123-4567</a></li>
                    <li><a href="#">Dirección: 123 Calle Principal, Ciudad, País</a></li>
                </ul>
            </div>
        </section>

        <section class="footer-section-three">
            <h3> Síguenos</h3>
            <div class="fotter-section-three_content">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </section>
    </div>

</footer>



</body>
</html>


<!-- 
    
 CNAME @  8rc9e8x1.up.railway.app 
TXT  _railway-verify  railway-verify=2cf012910464055e9654741f2c8489cce9383eb7eebe7dcef56ea4bef91fb941

-->
