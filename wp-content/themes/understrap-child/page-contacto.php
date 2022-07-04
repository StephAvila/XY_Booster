<?php
//Get the code into header.php
get_header();

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
        <a class="h6" href="https://goo.gl/maps/BC9ptD3e4Nm6EjSp8" target="_blank">Edgar Allan Poe 102 Polanco III Secc, Miguel Hidalgo, 11550 Ciudad de México, CDMX</a><br>
        <a class="h6" href="tel:553 493 3734"><i class="fa fa-phone"></i> 553 493 3734 </a><br>
        <a class="h6" href="mailto: robert@xybooster.com"><i class="fa fa-envelope-open"></i> robert@xybooster.com</a><br>
        <a class="h6" href="https://wa.link/0rv1tv" target="_blank"><i class="fa fa-whatsapp"></i> 553 493 3734</a>
        <p class="h6" >Hoario de atención: <span class="font-weight-bold">Lunes a Viernes de 9:00 a 17:00 hrs</span></p>
    </div>
    <div class="col-md-7 row px-0 text-right py-sm-4">
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx1.png" width="100%" class="col-md-6">
        <div class="col-md-6">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx2.png" class="pb-4" width="100%">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_cdmx3.png" width="100%">
        </div>
    </div>
</section>


<section class="row mt-sm-5">
    <div class="col-md-5 p-left">
        <h3 class="font-weight-bold">Barcelona, España</h3>
        <a class="h6" href="https://goo.gl/maps/BC9ptD3e4Nm6EjSp8" target="_blank">Plaça de Pau Vila 1, Barcelona, 08003</a><br>
        <a class="h6" href="tel:664 057 159"><i class="fa fa-phone"></i> 664 057 159 </a><br>
        <a class="h6" href="mailto: robert@xybooster.mx"><i class="fa fa-envelope-open"></i> robert@xybooster.com</a><br>
        <a class="h6" href="https://wa.link/kbkppj" target="_blank"><i class="fa fa-whatsapp"></i> 664 057 159</a>
        <p class="h6" >Hoario de atención: <span class="font-weight-bold">Lunes a Viernes de 9:00 a 17:00 hrs</span></p>
    </div>
    <div class="col-md-7 row px-0 text-right my-2">
        <div class="col-md-6">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/Enmascarar grupo 81.png">
        </div>
        <div class="col-md-6">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_barc3.png" class="pb-2" width="100%">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/contacto_barc2.png" width="100%" style="height: 181px">
        </div>
    </div>
</section>

<section class="py-3 my-5" style="background-color: #F5F5F5">
    <div class="row words">
        <div class="col-md-3 text-center text-sm-left y d-none d-sm-block">X</div>
        <div class="col-md-6 d-flex  flex-column justify-content-center align-items-center">
            <h1 class="titulo text-center" data-aos="zoom-out">Participa desde 5,000 MXN. <br> Diversificando, seguro y 100% regulado.</h1>
            <h4 class="subtitulo mb-sm-5 text-center" data-aos="zoom-in">¡Se parte de la próxima generación de Unicornios Mexicanos!</h4>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=Invierte&proyecto=General" class="button px-sm-5">Agendar</a>

        </div>
        <div class="col-md-3 text-center text-sm-right y d-none d-sm-block"> Y</div>
    </div>
</section>

<!--Carousel--->
<section class="my-sm-5 mt-5">
    <h1 class="titulo text-center" data-aos="zoom-out">Próximos Unicornios</h1>

    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators mt-4">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
        </ul>


        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/01.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo font-weight-bold" data-aos="zoom-in">XPats</h1>
                        <p class="my-sm-4">Una solución 100% orientada a la comunidad internacional de expatriados e inmigrantes en México.</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#xpats" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/xpats.png" class="py-5 imagen-slider">
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/02.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo" data-aos="zoom-in">Colors</h1>
                        <p class="my-sm-4">Una solución 100% orientada a la comunidad internacional de expatriados e inmigrantes en México.</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#colors" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-0">
                        <br>
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/colors.png" class="pt-4 imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/03.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo">CrediTaco</h1>
                        <p class="my-sm-4">Una solución 100% orientada al desarrollo de nuestros estimados taqueros y puestos de comida corrida.</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#creditaco" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/creditaco.png" class="py-5 my-sm-4 imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/04.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo" data-aos="zoom-in">Evolve</h1>
                        <p class="my-sm-4">Una solución 100% orientada a los pequeños empresarios y profesionales independientes y nómadas digitales (freelance).</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#evolve" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-0">
                        <br><br>
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/evolve.png" class="imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/05.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo" data-aos="zoom-in">Loved</h1>
                        <p class="my-sm-4">Una solución 100% orientada a colaboradores por nómina y personal de servicios domésticos.</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#loved" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/loved.png" class="py-5 imagen-slider">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/06.svg" class="img-carousel">
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-center text-left">
                        <h1 class="titulo" data-aos="zoom-in">Uni2</h1>
                        <p class="my-sm-4">Una solución 100% orientada a personas con familiares en USA.</p>
                        <div class="text-center">
                            <a href="<?php echo get_bloginfo("url") ?>/proximos-unicorns#unidos" class="button">Conoce más</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right px-0">
                        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/uni2.png" class="imagen-slider">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>