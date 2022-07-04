<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<?php onepress_breadcrumb(); ?>

<section class="my-5">
    <div style="background-image: url('<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/banner.png');" class="banner-eventos">
        <h1 class="titulo text-center pt-sm-5" style="color: white !important;">Conecta con inversores, <br>experimenta y aprende</h1>
        <h4 class="text-center my-5" style="color: white !important;">Nuestros eventos privados presenciales y en línea ofrecen una <br> oportunidad única para que nuestros miembros se reúnan.</h4>
       
            <div class="text-center">
                <a  href="#eventos" class="button2 px-sm-5">Próximo evento</a>
            </div>
 
        <p class="text-center mt-5">
            <a href="#eventos" class="boton-membresia"> <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/flechita.png" class="boton-membresia" style="width: 5%"></a>
        </p>
    </div>

    <div class="mt-5 container" id="eventos">
        <h1 class="text-center titulo">Nuestros Eventos</h1>
        <div class="row my-5">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Proximos/proximos.png" class="col-md-3 mb-3">
            <p class="d-flex col-md-4 align-items-center justify-content-center font-weight-bold">Cocktail de Lanzamiento XY BOOSTER Unicorns</p>
            <p class="d-flex justify-content-center align-items-center col-md-2 font-weight-bold">09/06/2022</p>
            <p class="d-flex justify-content-center align-items-center col-md-3"><a href="<?php echo get_bloginfo("url") ?>/inscribete-evento/?event=Cocktail de Lanzamiento XY BOOSTER Unicorns&date=09/06/2022" class="button2 px-sm-5">Inscríbete</a></p>
        </div>
        <div class="row my-5">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/1.png" class="col-md-3 mb-3">
            <p class="d-flex col-md-4 align-items-center  justify-content-center font-weight-bold">XPATS. Digital Nomads & Expats Super App </p>
            <p class="d-flex justify-content-center align-items-center col-md-2 font-weight-bold">23/06/2022</p>
            <p class="d-flex justify-content-center align-items-center col-md-3"><a href="<?php echo get_bloginfo("url") ?>/inscribete-evento/?event=XPATS. Digital Nomads & Expats Super App&date=23/06/2022" class="button2 px-sm-5">Inscríbete</a></p>
        </div>
        <div class="row my-5">
            <p class="col-md-3 text-center mb-3">
                <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Proximos/colors_2.png" width="70%" >
            </p>
            <p class="d-flex col-md-4 justify-content-center align-items-center font-weight-bold">COLORS Card LGTBIQ+ Super App </p>
            <p class="d-flex justify-content-center align-items-center col-md-2 font-weight-bold">30/06/2022</p>
            <p class="d-flex justify-content-center align-items-center col-md-3"><a href="<?php echo get_bloginfo("url") ?>/inscribete-evento/?event=COLORS Card LGTBIQ + Super Apps&date=30/06/2022" class="button2 px-sm-5">Inscríbete</a></p>
        </div>
        <div class="row my-5">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/3.png" class="col-md-3 mb-3">
            <p class="d-flex col-md-4 justify-content-center align-items-center font-weight-bold">CREDITACO App  </p>
            <p class="d-flex justify-content-center align-items-center col-md-2 font-weight-bold">07/07/2022</p>
            <p class="d-flex justify-content-center align-items-center col-md-3"><a href="<?php echo get_bloginfo("url") ?>/inscribete-evento/?event=CREDITACO App&date=07/07/2022" class="button2 px-sm-5">Inscríbete</a></p>
        </div>
        <div class="row my-5">
            <p class="text-center col-md-3">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/colaboracion.png" class="mb-3" width="70%"></p>
            <p class="d-flex col-md-4 justify-content-center align-items-center font-weight-bold">XY Booster Unicorns  </p>
            <p class="d-flex justify-content-center align-items-center col-md-2 font-weight-bold">14/07/2022</p>
            <p class="d-flex justify-content-center align-items-center col-md-3"><a href="<?php echo get_bloginfo("url") ?>/inscribete-evento/?event=XY Booster Unicorns&date=14/07/2022" class="button2 px-sm-5">Inscríbete</a></p>
        </div>
    </div>
</section>

<hr class="container">

<section class="row p-5">
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