<?php
//Get the code into header.php
get_header();


/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>

<section class="container">
    <h1 class="text-center titulo mt-5" data-aos="zoom-in">
        Confirmamos tu asistencia al desayuno de trabajo
    </h1>
    <h4 class="subtitulo my-5 text-center">¿Te gustaría asesorar a tus clientes para participar en la próxima generación de <br>UNICORNIOS* mexicanos?</h4>
    <div class="row mx-0">
        <div class="col-md-6 d-flex align-items-center">
            <h4 class="subtitulo text-justify"><strong>Hemos confirmado tu asistencia</strong> al desayuno de trabajo de XY Booster, donde te compartiremos cómo lo hacemos
                y las condiciones para formar parte de este exclusivo grupo de asesores en estrategia de inversión.
            </h4>
        </div>
        <div class="col-md-6 text-center">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/01.png" width="80%">
        </div>
    </div>
    <div class="my-5">
        <hr>
        <h1 class="titulo py-3 text-center">¡Únete al equipo XY Booster: la fábrica unicornios!</h1>
        <hr>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div>
            <h4 class="subtitulo">Te esperamos en:</h4>
            <h4 class="subtitulo px-sm-4">Lugar: <a href="https://goo.gl/maps/77FXKbzvNvMkQZc9A" target="_blank" style="font-weight:bold !important; color: #4d4d4d !important">Edgar Allan Poe 102, Polanco, CDMX. Terraza Colabora.</a></h4>
            <h4 class="subtitulo px-sm-4">Hora y día: <span style="font-weight:bold !important">9:00 a 11:00, viernes 3 de junio de 2022</span></h4>
        </div>
    </div>
</section>



<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>