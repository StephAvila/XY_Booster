<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>



<section>
    <div class="row mb-5">
        <div class="col-md-6 p-left d-flex flex-column  justify-content-center">
            <h1 class="titulo" data-aos="zoom-in" data-aos-duration="2000">
                “La prosperidad viene de la <br>Inteligencia Colectiva <br> trabajando en Plataforma”
            </h1>
            <p class="text-left mt-5">
                <a href="<?php echo get_bloginfo("url") ?>/membresia" class="button px-sm-5">Únete</a>
            </p>
        </div>
        <div class="col-md-6 text-right px-0">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/comunidad.png" width="80%">
        </div>
    </div>
</section>

<section class="pt-sm-5">

    <div class="row row-prox">
        <div class="col-md-6 text-left pl-sm-0">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/02.png">
        </div>
        <div class="col-md-6 pt-sm-5 mt-sm-5 pr-5">
            <h1 class="titulo" data-aos="slide-up" data-aos-duration="2000">¿Por qué formar parte de la comunidad XY Booster?</h1>
            <p class="text-justify mt-4">
                Realmente creemos en el poder colectivo y lo necesitamos para desafiar el status quo del mundo en el que queremos vivir.

                <br><br>
                Ofrecemos una plataforma bidireccional <> única, donde nuestros miembros pueden Contribuir o Enriquecerse en 5 formas:
            </p>
            <ol class="mt-md-5 mb-sm-0">
                <li class="my-3 text-justify">
                    <span class="font-weight-bold">Contenido, Noticias e Investigación.</span>
                    Como miembro podrás acceder a contenido, noticias e investigación exclusivamente curada para ti.
                    Del mismo modo los miembros podrán aportar contenido relevante (a través de la <a href="/blog"> sección Blog</a>) para que el resto de miembros pueda acceder ella.
                </li>
                <li class="my-3 text-justify">
                    <span class="font-weight-bold">Capacitación e Inspiración.</span>
                    nscríbete en cursos y seminarios especializados, pero también bríndanos la oportunidad de aprender de tu talento, mediante la plataforma
                    <span class="font-italic font-weight-bold"><a href="https://powerfinance.academy/" target="_blank">powerfinance.academy</a></span>
                </li>
                <li class="my-3 text-justify">
                    <span class="font-weight-bold">Consultoría y/o Asesoramiento.</span>
                    Muchas compañías y proyectos en etapa temprana requieren de asesoría / consultoría en áreas específicas.
                    Busca los que tu proyecto requiere, y al mismo tiempo ofrece tus servicios como consultor o asesor para apoyar en retos, a través de la plataforma
                    <span class="font-italic font-weight-bold"><a href="https://collectiveminds.io/" target="_blank">collectiveminds.io</a></span>
                </li>
                <li class="my-3 text-justify">
                    <span class="font-weight-bold">Co-Creación / Participación. </span>
                    El poder del colectivo para desarrollar nuevas iniciativas y/o features es inagotable.
                    Participa en la co-creación de iniciativas (design sprints, researh, AB testings, lean canvas, user journey mapping).
                </li>
                <li class="my-3 text-justify">
                    <span class="font-weight-bold">Carrera y/o Crecimiento Profesional. </span>
                    No hay mejor escaparate para mostrar tu talento, y/o seleccionar al talento que tu proyecto requiere.
                </li>
            </ol>
        </div>
    </div>
    <div class="container my-3">
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
    </div>
</section>


<section>
    <div class="row">
        <div class="col-md-6 d-flex p-left flex-column justify-content-center">
            <h1 class="titulo" data-aos="fade-down-left" data-aos-duration="2000">¿Quiénes pueden ser nuestros miembros?</h1>
            <ul class="mt-4">
                <li>Inversores Personas Físcas</li>
                <li>Estudiantes</li>
                <li>Consultores y Desarrolladores tecnológicos</li>
                <li>Firmas Profesionales</li>
                <li>Pymes y Grandes Empresas en Transformación Digital</li>
                <li>FinTech y Compañías Nativas Digitales</li>
                <li>Proveedores de servicios tecnológicos</li>
                <li>Emprendedores</li>
                <li>Universidades y Plataformas Educativas</li>
                <li>Organizaciones de Innovación e Investigación</li>
                <li>Inversores Angel / Fondos de Venture Capital</li>
            </ul>
            <p class="mt-4">
                <a href="<?php echo get_bloginfo("url") ?>/membresia" class="button px-sm-5">Únete</a>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/03.png" data-aos="fade-down-right" data-aos-duration="2000">
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="row mx-0">
        <div class="col-md-6 text-center">
            <br><br>
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/valores.png" class="col-md-10" id="collapseOneImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/colaboracion.png" class="col-md-10" id="collapseTwoImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/independencia.png" class="col-md-10" id="collapseThreeImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/respeto.png" class="col-md-10" id="collapseFourImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Comunidad/rigor.png" class="col-md-10" id="collapseFiveImg">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1 class="titulo pl-md-5"> Nuestros Valores</h1>
            <div class="accordion m-md-5" id="accordion">
                <div class="card">
                    <div class="card-header" onclick="showImg(1)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="fade-left">Inclusión</p>
                    </div>
                    <div id="collapseOne" style="display: none;">
                        <div class="card-body text-justify">
                            <p class="my-md-3 px-3">
                                XY Booster es un espacio abierto al público en general y a todos profesionales vinculados al ecosistema Fintech,
                                así como a todas las empresas en procesos de transformación digital e integración de finanzas contextuales (embedded finance).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" onclick="showImg(2)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="fade-right">Colaboración</p>
                    </div>
                    <div id="collapseTwo" style="display: none;">
                        <div class="card-body text-justify">
                            <p class="my-md-3 px-3">
                                XY Booster se posiciona como un espacio donde todos los participantes pueden aportar a través de su conocimiento y experiencia,
                                al mismo tiempo que pueden beneficiarse del conocimiento y experiencia de otros miembros,
                                creando así un ambiente óptimo para el desarrollo colectivo de iniciativas empresariales.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header " onclick="showImg(3)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="fade-left">Independiencia</p>
                    </div>
                    <div id="collapseThree" style="display: none;">
                        <div class="card-body text-justify">
                            <p class="my-md-3 px-3">
                                El modelo operativo de XY Booster se basa en la libertad de los participantes para involucrarse con los demás miembros de la plataforma
                                en iniciativas que agreguen valor al ecosistema, sin las limitaciones o sesgos particulares de cualquier organización.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" onclick="showImg(4)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="fade-right">Respeto</p>
                    </div>
                    <div id="collapseFour" style="display: none;">
                        <div class="card-body text-justify">
                            <p class="my-md-3 px-3">
                                XY Booster se caracteriza por el respeto a cada una de las personas y empresas que integran nuestra plataforma, ofreciendo un entorno en el que cualquier aporte compartido es bienvenido.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" onclick="showImg(5)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="fade-left">Rigor</p>
                    </div>
                    <div id="collapseFive">
                        <div class="card-body text-justify">
                            <p class="my-md-3 px-3">
                                En su compromiso por ofrecer modelos innovadores que tengan un impacto social y económico positivo, XY Booster se somete a un control de calidad sistemático de cualquier actividad o iniciativa para asegurar su valor y validez.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

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
                        <p class="my-sm-4">Una solución 100% diseñada para la comunidad LGBTI+ con un propósito social.</p>
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