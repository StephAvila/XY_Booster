<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<section>
    <h1 class="titulo font-weight-bold text-center" data-aos="zoom-in" data-aos-duration="2000">¡Ups!</p>
        <div class="d-flex flex-column justify-content-center align-items-center my-5">

            <p class="h3 mt-3 text-center" data-aos="fade-down-right"> La página que buscas no se encuentra en este sitio. <br> Intenta de nuevo o ponte en contacto con nosotros al
                <a href="https://wa.link/0rv1tv">553 493 3734</a>
            </p>
            <h2 class="text-center mt-5">We make money, not startups</h2>
            
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/hero5.jpg" class="col-md-3">
        </div>
        <div class="text-center my-4">
            <p class="h6 container pr-1 pr-sm-4 mt-sm-5" style="font-weight:300">
                XY Booster se encuentra regulada por la ley de mercado de valores, <br>que tiene por objeto, proteger los intereses del público inversionista, <br>minimizar el riesgo sistémico y fomentar una sana competencia.
            </p>
            <a href="<?php echo get_bloginfo("url") ?>/" class="button">Regresar al Inicio</a>
        </div>
</section>


<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>