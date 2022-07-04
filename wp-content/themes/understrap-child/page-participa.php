<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<section>
    <div class="row">
        <div class="col-md-6 p-left  pt-sm-5">
            <h1 class="titulo mt-md-5 mb-sm-5 pl-sm-5" data-aos="fade-right"> ¡Participa con nosotros <br>en la próxima generación de <br>Unicornios mexicanos!</h1>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=general" class="button px-sm-5 ml-sm-5">Agendar</a>
            <p class="text-center text-lg-right y d-none d-lg-block">XY</p>
        </div>
        <div class="col-md-6 text-center text-sm-right">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Invierte/invierte.png" class="img-participa">
        </div>
    </div>

    <div class="row mx-0 px-sm-5 pb-sm-5 justify-content-center ">
        <div class="col-sm-3 border1">
            <h2 class="titulo">Peaceful</h2>
            <p class="text-center mt-sm-5">Montos desde <br> $5,000 MXN hasta $180,000 MXN</p>
            <h1 class="mt-sm-4 mb-sm-0 titulo">5% - 12%</h1>
            <p class="text-center mb-3 mb-sm-5">rendimiento esperado</p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=paceful" class="button">Agendar</a>
        </div>
        <div class="col-sm-3 border2">
            <h1 class="titulo">Entrepreneurial Spirit</h1>
            <p class="text-center mt-sm-4">Montos desde <br> $5,000 MXN hasta $1,000,000 MXN</p>
            <h1 class="mt-sm-4 mb-sm-0 titulo">2X</h1>
            <p class="text-center mb-3 mb-sm-4 pb-sm-3">rendimiento esperado <br></p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=entrepreneurial" class="button">Agendar</a>
        </div>

        <div class="col-sm-3 border3">
            <h1 class="titulo mb-sm-5" style="color: white !important;">Unicorn Seekers</h1>
            <p class="text-center mt-sm-4" style="color: white !important;">Montos desde <br> $5,000 MXN hasta $5,000,000 MXN</p>
            <h1 class="mt-sm-4 mb-sm-0 titulo" style="color:white !important">10X</h1>
            <p class="text-center mb-3 mb-sm-5" style="color:white !important">rendimiento esperado <br></p>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=seekers" class="button">Agendar</a>
        </div>
    </div>
</section>

<section class="mt-sm-5">
    <div class="row">
        <div class="col-lg-6 p-left">
            <h1 class="titulo ml-sm-5">¿Como lo hacemos?</h1>
            <h4 class="subtitulo ml-sm-5">Basamos nuestra estrategia de éxito en 7 pilares: </h4>
            <ol class="mt-sm-5 ml-sm-5">
                <li>Obsesión por el Cliente.</li>
                <li>Múltiples productos por cliente = mayor retención y tiempo de relación con nuestras soluciones</li>
                <li>Potencial crecimiento por cliente de +1,000 USD.</li>
                <li>Minimización de riesgos al invertir en múltiples proyectos.</li>
                <li>Co-Creamos con expertos en cada materia.</li>
                <li>Tecnología escalable y segura.</li>
                <li>Máximos estándares normativos.</li>
            </ol>
            <p class="text-left mt-sm-5 ml-sm-5">
                <a href="<?php echo get_bloginfo("url") ?>/plataforma" class="button">Conoce la plataforma</a>
            </p>
            <p class="text-center">
                <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/balanza.png" class="mt-3" data-aos="fade-down-right">
            </p>
        </div>
        <div class="col-lg-6 text-right d-none d-lg-block">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Invierte/comolohacemos.png" class="pl-sm-5 mt-3" data-aos="fade-down-left">
        </div>
    </div>
</section>

<section class="py-3 my-5" style="background-color: #F5F5F5">
    <div class="row words">
        <div class="col-md-3 text-center text-sm-left y d-none d-sm-block">X</div>
        <div class="col-md-6 d-flex  flex-column justify-content-center align-items-center">
            <h1 class="titulo text-center" data-aos="zoom-out">Participa desde 5,000 MXN. <br> Diversificando, seguro y 100% regulado.</h1>
            <h4 class="subtitulo mb-sm-5 text-center" data-aos="zoom-in">¡Se parte de la próxima generación de Unicornios Mexicanos!</h4>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=general" class="button px-sm-5">Agendar</a>

        </div>
        <div class="col-md-3 text-center text-sm-right y d-none d-sm-block"> Y</div>
    </div>
</section>

<section class="row row-prox">
    <div class="col-md-6 py-0 text-sm-left d-flex align-items-sm-center justify-content-center justify-content-sm-start" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Invierte/3.png" class="mt-3 img-participa">
    </div>
    <div class="col-md-6 pr-sm-5 accordion" id="accordion">
        <h1 class="titulo mb-sm-5"> ¡10 Motivos para participar <br> en XY Booster!</h1>

        <div class="card">
            <div class="card-header pt-4" id="headingOne">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Acceso Temprano y Alto Potencial de Rentabilidad</h4>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body text-justify py-0">
                    <p class="text-justify mb-md-3 px-3">
                        Acceder a rondas de inversión en etapas tempranas (Pre-Seed & Early Statge) te ofrece el máximo potencial de multiplicar tu inversión
                        (+100X) antes de que los proyectos alcancen la categoría de Unicorn y/o su salida el mercado público.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingTwo">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Inclusiva desde 5,000 MXN</h4>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Queremos democratizar el acceso a este tipo de oportunidades, hoy exclusivas para inversores con mayores recursos, grupos económicos-familiares,
                        y/o fondos de Venture Capital cuyas políticas restrictivas no te permiten participar.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingThree">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Sin Costos de Administración ni Distribución de Beneficios</h4>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        A diferencia de los Fondos de Venture Capital, no cobramos comisiones anuales de administración, ni participamos en los beneficios de los proyectos.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingFour">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Iniciativas Diversificadas</h4>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Participar en XY Booster significa acceder a soluciones financieras y tecnológicas dirigidas hacia segmentos de negocio desatendidos con un gran potencial.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingFive">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Regulación</h4>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Únicamente desarrollamos y participamos en iniciativas que podemos soportar regulatoriamente al 100% con las garantías del Fondo de Protección al Ahorro,
                        y la posibilidad de capturar nuestros propios depósitos y emitir nuestros propios medios de pago. Sin Intermediarios, Sin Compartir Comisiones y Ganancias. Con total seguridad y transparencia.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingSix">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Capacidad de Ejecución 100%</h4>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        XY Booster solo participa en iniciativas que puede ejecutar al mercado desde el minuto 1. Iniciativas que cuentan ya con todas la capacidades y requisitos regulatorios para accionarse de inmediato.
                        Suena trivial, pero muchas Fintech y Fondos de VC se quedan en el camino por arrancar sin todos los ingredientes que luego no llegan, o tardan más de 3 años en llegar.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingSeven">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Múltiples Fuentes de Ingreso</h4>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Participar en soluciones con base de regulación al 100%, implica la capacidad de desarrollar para cada iniciativa o proyecto diversas fuentes de Ingreso.
                        Por falta de regulación la mayoría de proyectos arrancan con un MVP (minimum viable product) esperando en el camino poder desarrollar nuevas soluciones.
                        Nuestros proyectos / iniciativas pueden tener desde el min. 1 diversas fuentes de ingresos.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingEight">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Condiciones Premium</h4>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        De forma exclusiva para los participantes de XY Booster ofrecemos condiciones PREMIUM en inversión a plazo fijo “Cling” y “CEDES” de nuestra Sofipo ICTINEO Plataforma.
                        Contrátalas directamente con un asesor ICTINEO o informate en ictineo.com
                        Nuestros proyectos / iniciativas pueden tener desde el min. 1 diversas fuentes de ingresos.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingNine">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Comunidad Independiente</h4>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Nada puede competir contra el poder de una comunidad global, educada e independiente trabajando en plataforma. La capacidad de identificar iniciativas es más poderosa,
                        la capacidad de levantar el capital y promover las iniciativas es mucho más poderosa, y la capacidad de generar oportunidades profesionales e identificar y apalancarse en el talento es infinitamente más poderosa.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pt-4" id="headingTen">
                <h4 class="font-weight-bold" style="color: #404040 !important" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Mayor Rendimiento con un Menor Riesgo</h4>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body text-justify py-2">
                    <p class="text-justify mb-md-3 px-3">
                        Fácil de enunciar, pero extremadamente complejo de ejecutar.
                        A menos que no se cuente con los exclusivos ingredientes de nuestra propuesta de valor: Valores, Plataforma, Regulación y Especialización.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-3 mt-sm-5 py-sm-5 px-3">
    <div class="p-left">
        <h1 class="titulo" data-aos="fade-down-right">¿Cuál será el uso de <br>los recursos?</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p class="p-left py-0 py-sm-4"> Diseño <br> Tecnología <br>Marketing <br>Regulación <br>Operación</p>
        </div>
        <div class="col-md-9">
            <div class="cards-invierte">
                <div>
                    <h1 class="titulo" data-aos="fade-left">
                        <span class="display-1 font-weight-bold" style="color: #818181!important">10%</span><br>
                        Diseño
                    </h1>
                    <ul>
                        <li>Research</li>
                        <li>Design Sprints</li>
                        <li>Lean Canvas</li>
                        <li>Business Model Canvas</li>
                        <li>Brands & Creativity</li>
                        <li>AB Testing</li>
                        <li>Development Blueprints</li>
                        <li>UX/UI Team</li>
                    </ul>
                </div>
                <div>
                    <h1 class="titulo" data-aos="zoom-in">
                        <span class="display-1 font-weight-bold" style="color: #818181;">30%</span><br>
                        Tecnología
                    </h1>
                    <ul>
                        <li>IT Platform Architect</li>
                        <li>Core Banking Platform</li>
                        <li>Middleware APIs Dev</li>
                        <li>Features Development Team</li>
                        <li>VISA / MasterCard implementation</li>
                        <li>Customer Data Platform</li>
                        <li>Cloud Services AWS</li>
                    </ul>
                </div>
                <div>
                    <h1 class="titulo" data-aos="fade-right">
                        <span class="display-1 font-weight-bold" style="color: #818181;">20%</span><br>
                        Marketing
                    </h1>
                    <ul>
                        <li>CAC (10-20 USD)</li>
                        <li>CSocial Media (Youtube, Facebook, Instagram)</li>
                        <li>BTL Activation</li>
                        <li>PR / Influencers / Events</li>
                        <li>Loyalty & Referrals</li>
                    </ul>
                </div>
                <div>
                    <h1 class="titulo" data-aos="flip-right">
                        <span class="display-1 font-weight-bold" style="color: #818181;">20%</span><br>
                        Regulación
                    </h1>
                    <ul>
                        <li>Compliance & RegTech Team</li>
                        <li>Onboarding Verification</li>
                        <li>AML</li>
                        <li>Proactive Reporting</li>
                        <li>Reg KPI´s Dahboard</li>
                        <li>Internal Auditing</li>
                    </ul>
                </div>

                <div>
                    <h1 class="titulo" data-aos="flip-left">
                        <span class="display-1 font-weight-bold" style="color: #818181;">20%</span><br>
                        Operación
                    </h1>
                    <ul>
                        <li>XY Booster Lab</li>
                        <li>Customer Care Center</li>
                        <li>Cards Certification Buffers</li>
                        <li>Office & Equipment Growth</li>
                        <li>Card Manufacturing</li>
                        <li>IT Infrastructure Fees</li>
                        <li>Customer Analytics</li>
                        <li>Talent & Cultures Team</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="py-3" style="background-color: #F5F5F5">
    <div class="row words">
        <div class="col-md-3 text-center text-sm-left y d-none d-sm-block">X</div>
        <div class="col-md-6 d-flex  flex-column justify-content-center align-items-center">
            <h1 class="titulo text-center" data-aos="zoom-out">Participa desde 5,000 MXN. <br> Diversificando, seguro y 100% regulado.</h1>
            <h4 class="subtitulo mb-sm-5 text-center" data-aos="zoom-in">¡Se parte de la próxima generación de Unicornios Mexicanos!</h4>
            <a href="<?php echo get_bloginfo("url") ?>/agendar-cita/?origen=invierte&proyecto=general" class="button px-sm-5">Agendar</a>

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