<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>

<section class="mt-5">
    <h1 class="text-center px-md-5 titulo" data-aos="zoom-out">Participa con nosotros en la <br>próxima generación de <span class="half_background">Unicornios </span> Mexicanos</h1>
    <h4 class="text-center subtitulo" data-aos="flip-left">Selecciona el plan que mejor se adapta a tu capacidad</h4>

    <div class="row mx-0 p-sm-5 justify-content-center align-items-center ">
        <div class="col-sm-3 border1">
            <h1 class="titulo2">Peaceful</h1>
            <p class="text-center mt-sm-3">Montos desde <br> $5,000 MXN hasta $180,000 MXN</p>
            <h2 class="mt-sm-4 mb-sm-0 titulo2">hasta 12%</h2><br>
            <p class="text-center mb-3 mb-sm-5"><br>rendimiento esperado anual</p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=Participa&proyecto=Peaceful" class="button">Agendar</a>
        </div>
        <div class="col-sm-3 border2 pb-sm-5">
            <h1 class="titulo2 mt-sm-4">Entrepreneurial <br>Spirit</h1>
            <p class="text-center mt-sm-4">Montos desde <br> $5,000 MXN hasta $1,000,000 MXN</p>
            <h1 class="mt-sm-4 mb-sm-0 titulo display-4 font-weight-bold">2X</h1>
            <p class="text-center mb-3 mb-sm-3 pb-sm-3">rendimiento esperado <br></p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=Participa&proyecto=Entrepreneurial" class="button mb-sm-5">Agendar</a>
        </div>

        <div class="col-sm-3 border3">
            <h1 class="titulo mb-sm-5 mt-sm-4 titulo2">Unicorn Seekers</h1>
            <p class="text-center mt-sm-4">Montos desde <br> $5,000 MXN hasta $5,000,000 MXN</p>
            <h1 class="mt-sm-4 mb-sm-0 titulo display-3 font-weight-bold">10X</h1>
            <p class="text-center mb-3 mb-sm-5">rendimiento esperado <br></p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=Participa&proyecto=Seekers" class="button">Agendar</a>
        </div>
    </div>

    <div class="text-center">
        <a href="<?php echo get_bloginfo("url") ?>/participa/#como-hacemos" class="button">¿Cómo lo hacemos?</a>
    </div>
</section>


<section class="my-5 text-center">
    <h1 class="titulo text-center container" data-aos="zoom-in">¡Vivimos y vibramos con lo que hacemos! <br>Únete a la revolución XY Booster y <br> <span class="half_background">¡gana de la forma correcta!</span></h1>
    <iframe data-aos="flip-left" src="https://www.youtube.com/embed/r9X1WiIb6Vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="my-5 video-home"></iframe>
    <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/bannerxy.png" data-aos="zoom-in" class="w-100" data-aos-duration="3000">
</section>

<section class="my-sm-5 d-none d-sm-block">
    <div class="row fotos mx-0 square-wrapper5">
        <div class="col-md-4">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/Grupo 62.png" class="foto1 square-transition">
        </div>
        <div class="col-md-4 text-center">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/Enmascarar_grupo_29.png" class="foto2">
        </div>
        <div class="col-md-4">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/Grupo 63.png" class="foto3 square-transition">
        </div>
    </div>
</section>


<section style="background-color: #F5F5F5">
    <div class="row p-5">
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
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-6 mx-0 text-center back-image" style="background-image: url('<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/barcelona.png');">
            <p class="subtitulo"> Centro de Innovación, diseño e ingeniería</p>
            <h1 class="titulo my-2 mt-sm-5 mb-0"> The CX Lab</h1>
            <p>Barcelona España</p>
            <a href="<?php echo get_bloginfo("url") ?>/plataforma#cxlab" class="button px-sm-5">Conoce más</a>
        </div>
        <div class="col-md-6 mx-0 px-0 text-center back-image" style="background-image: url('<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/cdmx.png');">
            <p class="subtitulo"> Centro de operaciones y regulación</p>
            <h1 class="titulo my-2 mt-sm-5 mb-0"> XY Booster</h1>
            <p>CDMX, México</p>
            <a href="<?php echo get_bloginfo("url") ?>/plataforma#xybooster" class="button px-sm-5">Conoce más</a>
        </div>
    </div>
</section>



<section class="my-5">
    <h1 class="titulo text-center" data-aos="fade-left"> Últimas publicaciones</h1>
    <h4 class="subtitulo text-center">Blog</h4>
    <div class="container recent-post my-sm-5" data-aos="zoom-in">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Number of recent posts thumbnails to display
            'post_status' => 'publish', // Show only the published posts
            'post_type' => 'post',

        ));

        foreach ($recent_posts as $post_item) :
            $content = $post_item['post_content'];
            $trimmed_content = wp_trim_words($content, 20, NULL);

        ?>
            <div class="post-blog text-left" data-aos="flip-right">
                <a class="content-post" href="<?php echo get_permalink($post_item['ID']) ?>">
                    <?php echo get_the_post_thumbnail($post_item['ID']); ?>
                    <h3 class="my-sm-3"><?php echo $post_item['post_title'] ?></h3>
                    <p>
                        <?php echo $trimmed_content ?><br>
                        <a href="<?php echo get_permalink($post_item['ID']) ?>">Leer más...</a>
                    </p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="container">
    <hr>
    <div class="row" data-aos="flip-up">
        <div class="col-md-6 d-flex justify-content-center">
            <div>
                <h1 class="titulo mb-sm-0">Mantente informado</h1>
                <p class="subtitulo">Suscríbete a nuestro newsletter</p>
            </div>
        </div>
        <div class="col-md-6 align-items-center p-sm-5 p-0 text-center">
            <a href="<?php echo get_bloginfo("url") ?>/membresia" class="button px-sm-5">Únete</a>
        </div>
    </div>
    <hr>
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