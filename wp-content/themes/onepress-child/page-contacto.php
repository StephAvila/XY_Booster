<?php
//Get the code into header.php
get_header();
onepress_breadcrumb();
/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<section>
    <div class="row my-4">
        <div class="col-md-6 px-md-5">
            <h1 class="text-center my-4 titulo" data-aos="zoom-in">¡Contáctanos!</h1>
            <h1 class="text-center subtitulo mb-sm-5">Conviértete en un XY Booster</h4>
            <?php
            $req = "required";
            $source = "contacto";
            $class2="display:none";
            require "form-contacto.php";
            ?>
        </div>
        <div class="col-md-6 text-right">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/contacto.png">
        </div>
    </div>
</section>

<section class="row">
    <div class="col-md-5 p-left">
        <h1 class="my-4 titulo" data-aos="flip-left">¡Visítanos!</h1>
        <h4 class="subtitulo mb-sm-5">Nuestras oficinas:</h4>
        <h3 class="font-weight-bold">CDMX, México</h3>
        <a class="h5" href="https://goo.gl/maps/BC9ptD3e4Nm6EjSp8" target="_blank">Edgar Allan Poe 102 Polanco III Secc, Miguel Hidalgo, 11550 Ciudad de México, CDMX</a><br><br>
        <a class="h5" href="tel:553 493 3734"><span class="mr-2"><i class="fa fa-phone"></i></span> 553 493 3734 </a><br>
        <a class="h5" href="mailto: robert@xybooster.com"><span class="mr-2"><i class="fa fa-envelope-open"></i></span> robert@xybooster.com</a><br>
        <a class="h5" href="https://wa.link/0rv1tv" target="_blank"><span class="mr-2"><i class="fa fa-whatsapp"></i></span> 553 493 3734</a><br><br>
        <p class="h5" >Hoario de atención: <span class="font-weight-bold">Lunes a Viernes de 9:00 a 17:00 hrs</span></p>
    </div>
    <div class="col-md-7 row pl-4 pr-0 text-right py-sm-4">
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx1.png" width="100%" class="col-md-6">
        <div class="col-md-6 px-0">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx2.png" class="pb-4" width="100%">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx3.png" width="100%">
        </div>
    </div>
</section>


<section class="row mt-sm-5">
    <div class="col-md-5 p-left">
        <h3 class="font-weight-bold">Barcelona, España</h3>
        <a class="h5" href="https://goo.gl/maps/BC9ptD3e4Nm6EjSp8" target="_blank">Plaça de Pau Vila 1, Barcelona, 08003</a><br><br>
        <a class="h5" href="tel:664 057 159"><span class="mr-2"><i class="fa fa-phone"></i></span> 664 057 159 </a><br>
        <a class="h5" href="mailto: robert@xybooster.mx"><span class="mr-2"><i class="fa fa-envelope-open"></i></span> robert@xybooster.com</a><br>
        <a class="h5" href="https://wa.link/kbkppj" target="_blank"><span class="mr-2"><i class="fa fa-whatsapp"></i></span> 664 057 159</a><br><br>
        <p class="h5" >Hoario de atención: <span class="font-weight-bold">Lunes a Viernes de 9:00 a 17:00 hrs</span></p>
    </div>
    <div class="col-md-7 row pl-4 pr-0 text-right my-2">
        <div class="col-md-6">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/Enmascarar grupo 81.png">
        </div>
        <div class="col-md-6 px-0">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_barc3.png" class="pb-2" width="100%">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_barc2.png" width="100%" style="height: 150px">
        </div>
    </div>
</section>
<hr class="container">

<section class="row p-5 my-sm-5">
    <div class="col-md-6 p-sm-5">
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/balanza.png" class="mt-3" data-aos="fade-down-right">
    </div>
    <div class="col-md-6 p-sm-5 p-0">
        <h1 class="tiitulo mb-5" style="color: #222222 !important;">
            Invertimos <span class="half_background">más de 5 años</span> de procesos regulatorios y <span class="half_background"> 80 millones de pesos</span> para lanzar la primera fábrica mexicana de 
            <span class="half_background">unicornios.</span>
        </h1>
        <a href="<?php echo get_bloginfo("url") ?>/participa" class="button px-sm-5">Participa</a>
    </div>
</section>

<section class="py-3" style="background-color: #F5F5F5">
    <div class="row words">
        <div class="col-md-2 text-center text-sm-left y d-none d-sm-block">X</div>
        <div class="col-md-8 pl-sm-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="titulo text-center" data-aos="zoom-out">Participa <span class="half_background">desde 5,000 MXN.</span> <br> Diversificado, seguro y 100% regulado.</h1>
            <h4 class="subtitulo mb-sm-5 text-center" data-aos="zoom-in">¡Se parte de la próxima generación de Unicornios Mexicanos!</h4>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=Participa&proyecto=General" class="button px-sm-5">Agendar</a>
        </div>
        <div class="col-md-2 text-center text-sm-right y d-none d-sm-block"> Y</div>
    </div>
</section>

<!--Carousel--->
<section class="my-sm-4 mb-5">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/01.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>
                        <h1 class="titulo" style="color:#707070 !important">XPats</h1>
                        <p class="my-sm-4">Una solución 100% orientada a la comunidad internacional de expatriados e inmigrantes en México.</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#xpats" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 px-0 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/xpats.png" class="imagen-slider">
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/02.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>
                        <h1 class="titulo" style="color:#707070 !important">Colors</h1>
                        <p class="my-sm-4">Una solución 100% diseñada para la comunidad LGBTI+ con un propósito social.</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#colors" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/colors.png" class="imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/03.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>
                        <h1 class="titulo" style="color:#707070 !important">CrediTaco</h1>
                        <p class="my-sm-4">Una solución 100% orientada al desarrollo de nuestros estimados taqueros y puestos de comida corrida.</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#creditaco" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/creditaco.png" class="imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/04.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>
                        <h1 class="titulo" style="color:#707070 !important">Evolve</h1>
                        <p class="my-sm-4">Una solución 100% orientada a los pequeños empresarios y profesionales independientes y nómadas digitales (freelance).</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#evolve" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/evolve.png" class="imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/05.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>
                        <h1 class="titulo" style="color:#707070 !important">Loved</h1>
                        <p class="my-sm-4">Una solución 100% orientada a colaboradores por nómina y personal de servicios domésticos.</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#loved" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/loved.png" class="imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row align-content-center justify-content-center">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/06.svg" class="img-carousel">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo"><span class="half_background">Próximos Unicornios</span></h1>

                        <h1 class="titulo" style="color:#707070 !important">Uni2</h1>
                        <p class="my-sm-4">Una solución 100% orientada a personas con familiares en USA.</p>
                        <div class="mt-3">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#unidos" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/uni2.png" class="imagen-slider">
                    </div>
                </div>
            </div>
        </div>
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
        </ul>

    </div>
</section>



<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>