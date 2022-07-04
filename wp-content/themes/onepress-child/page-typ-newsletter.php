<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<section>
    <h1 class="titulo text-center" data-aos="zoom-in" data-aos-duration="2000">¡¡Gracias por suscribirte!!</h1>
    <div class="row my-5">
        <div class="col-md-6 px-md-5 d-flex flex-column justify-content-center">
        <p class="h4 mt-3"> En breve un representante de XY Booster se pondrá en contacto contigo.</p>
            <h2 class="text-center mt-5">We make money,<br>not startups</h2>
            <p class="h6 text-justify pr-1 pr-sm-4 mt-sm-5" style="font-weight:300">
                XY Booster se encuentra regulada por la ley de mercado de valores, que tiene por objeto, proteger los intereses del público inversionista, minimizar el riesgo sistémico y fomentar una sana competencia.
            </p>
        </div>
        <div class="col-md-6 text-right">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Invierte/01.png">
        </div>
    </div>
    <div class="text-center my-4">
        <a href="<?php echo get_bloginfo("url") ?>/" class="button2">Regresar al Inicio</a>
    </div>
</section>


<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>