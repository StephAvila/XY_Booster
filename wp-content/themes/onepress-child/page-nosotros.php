<?php
//Get the code into header.php
get_header();

onepress_breadcrumb();
/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<section class="row" id="manifiesto">
    <div class="col-lg-6 d-flex flex-column justify-content-center p-left">
        <h1 class="titulo pl-sm-5  text-center text-lg-left" data-aos="zoom-in">Manifiesto</h1>
        <p class="mt-md-4 pl-lg-5 px-5 subtitulo"> Las empresas de servicios financieros más exitosas del futuro serán obsesivamente digitales y centradas en el Cliente.
            Esto significa crear productos y servicios teniendo en cuenta todas las posibilidades del diseño centrado en el ser humano, la inteligencia artificial y del panorama tecnológico digital más vanguardista.
        </p>
    </div>
    <div class="col-md-6 text-center text-lg-right py-0 d-none d-lg-block">
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/08.png" class="img-manifiesto">
    </div>


</section>

<section class="mx-sm-5 mx-3 my-md-5">
    <div class="row mx-0">
        <div class="col-md-6 text-left d-none d-sm-block px-0">
            <br><br>
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/inteligente.png" class="col-md-10" id="collapseOneImg">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/entiempo.png" class="col-md-10" id="collapseTwoImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/contextual.png" class="col-md-10 " id="collapseThreeImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/humanas.png" class="col-md-10" id="collapseFourImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/embedidas.png" class="col-md-10" id="collapseFiveImg" style="display: none">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/sociales.png" class="col-md-10" id="collapseSixImg" style="display: none">
        </div>
        <div class="col-md-6 px-0">
            <p class="pl-3 py-sm-5 titulo font-weight-bold">Tendencias en las soluciones financieras globales:</p>
            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header pt-5 pt-sm-0" onclck="showImg(1)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important">Inteligentes</p>
                    </div>
                    <div id="collapseOne">
                        <div class="card-body text-justify py-0">
                            <p class="text-justify my-md-3 px-3">
                                Utilizan los datos de los clientes para crear servicios inteligentes que se centran en el estilo vida y en los diferentes ciclos por los que atraviesa un cliente, no en un único producto o servicio.
                                La gente no quiere un crédito hipotecario. Quieren comprar una casa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header mt-sm-3" onclick="showImg(2)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="zoom-in">En Tiempo Real</p>
                    </div>
                    <div id="collapseTwo" style="display: none;">
                        <div class="card-body text-justify py-0">
                            <p class="mb-sm-4 px-3">
                                Todos nos hemos acostumbrado a un mundo interconectado donde podemos comprar, comunicarnos, aprender, consumir contenido, etc., todo en tiempo real.
                                La expectativa de los servicios financieros no es diferente. Los productos deben mostrar conocimientos, recompensas y ofertas en tiempo real para ayudar a los clientes a tomar decisiones también en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header mt-sm-3" onclick="showImg(3)">
                        <p class="h4 font-weight-bold" style="color: #404040 !important" data-aos="zoom-out">Contextuales</p>
                    </div>
                    <div id="collapseThree" style="display: none;">
                        <div class="card-body text-justify py-0">
                            <p class="mb-sm-4 px-3">
                                Saber dónde está el cliente, qué está haciendo y con quién está son piezas de información sobre el contexto en el que se encuentra.
                                Los servicios verdaderamente digitales usan esto para crear experiencias convenientes, por ejemplo, ofreciendo a alguien un seguro de viaje sabiendo que acaba de comprar vuelos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header mt-sm-3" onclick="showImg(4)">
                        <h2 data-aos="zoom-in" class="h4 font-weight-bold" style="color: #404040 !important">Humanas</h2>
                    </div>
                    <div id="collapseFour" style="display: none;">
                        <div class="card-body text-justify py-0">
                            <p class="mb-sm-4 px-3">
                                Las experiencias digitales no tienen que sentirse impersonales. El mundo de los servicios verdaderamente digitales hace posible que las empresas ofrezcan productos y servicios personalizados a escala global.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header mt-sm-3" onclick="showImg(5)">
                        <p data-aos="zoom-out" class="h4 font-weight-bold" style="color: #404040 !important">Integrales / embedidas</p>
                    </div>
                    <div id="collapseFive" style="display: none;">
                        <div class="card-body text-justify py-0">
                            <p class="mb-ms-4 px-3">
                                Los productos y servicios verdaderamente digitales pueden y deben brindar experiencias integrales a través de potentes APIs, markeplaces especializados donde los mejores jugadores ofrecen sus capacidades y plataformas integradas donde los productos y servicios integrados resuelven un grupo de problemas interrelacionados.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header mt-sm-3" onclick="showImg(6)">
                        <p data-aos="zoom-in" class="h4 font-weight-bold" style="color: #404040 !important">Comunitarias / Sociales</p>
                    </div>
                    <div id="collapseSix" style="display: none;">
                        <div class="card-body text-justify py-0">
                            <p class="mb-ms-4 px-3">
                                Somos una especie social, pero tradicionalmente la banca ha aislado nuestras finanzas a una sola persona/cuenta. En realidad, vivimos en familias, grupos, comunidades y sociedades. Los servicios digitales exitosos lo hacen fácil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="mx-2 ml-sm-5">

<section class="my-2 my-sm-5">
    <div class="row mx-0 d-flex">
        <div class="col-sm-6 text-right pr-5 d-flex flex-column justify-content-center">
            <h1 class="titulo" data-aos="fade-down" data-aos-easing="linear">“La Flexibilidad <br>es el Nuevo Sueldo”</h1>
            <h4 class="subtitulo">¿Los servicios financieros están a la altura?</h4>
        </div>
        <div class="col-sm-6 mt-3 text-right">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/01.png">
        </div>
    </div>
</section>
<hr class="mx-2 mr-sm-5 col-md-10">


<section class="row mt-sm-5">
    <div class="col-md-5 text-right">
        <p class="subtitulo col-md-10 ml-sm-5" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
            <span class="font-weight-bold">XY Booster</span> está comprometido con mejorar la <span class="font-weight-bold">calidad de vida de los mexicanos</span>, promoviendo soluciones financieras <span class="font-weight-bold">innovadoras y flexibles</span> que nos permitan elegir:
        </p>
    </div>
    <div class="col-md-3 words-us pl-3">
        <h1 class="titulo">- Con quién</h1>
        <h1 class="titulo">- Cuándo</h1>
        <h1 class="titulo">- Cómo</h1>
        <h1 class="titulo">- Por cuánto</h1>
        <h1 class="titulo">- Para qué</h1>
        <h1 class="titulo">- En dónde</h1>
        <h1 class="titulo">- Desde dónde</h1>
    </div>
    <div class="col-md-3 words-us text-center y" data-aos="zoom-in" data-aos-duration="2000">
        XY
    </div>
</section>

<section style="background-color: #F5F5F5" id="competitiva" class="mt-5">
    <h1 class="titulo pt-5 text-center">Nuestra ventaja competitiva</h1>
    <div class="row p-5">
        <div class="col-md-6 p-sm-5 p-0">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Plataforma/balanza.png" class="mt-3" data-aos="fade-down-right">
        </div>
        <div class="col-md-6 p-sm-5">
            <h1 class="tiitulo mb-5" style="color: #222222 !important;">
                Invertimos <span class="half_background">más de 5 años</span> de procesos regulatorios y <span class="half_background"> 80 millones de pesos</span> para lanzar la primera fábrica mexicana de
                <span class="half_background">unicornios.</span>
            </h1>
            <a href="<?php echo get_bloginfo("url") ?>/participa" class="button px-sm-5">Participa</a>
        </div>
    </div>
</section>

<section id="QueHacemos" class="mt-3">
    <h1 class="titulo text-center pt-sm-5" data-aos="flip-down" data-aos-duration="2000">¿Qué Hacemos?</h1>
    <h4 class="text-center subtitulo mb-5">¡We make money, <span class="font-weight-bold">not startups!</span></h4>

    <div class="row mx-0">
        <div class="col-md-4 pl-0 d-sm-block d-none mt-4">
            <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/02.png">
        </div>
        <div class="col-md-8">
            <div>
                <h1 class="titulo" data-aos="fade-left"><span class="display-1 font-weight-bold">1</span> Co-Creamos</h1>
                <p class="pl-sm-5 ml-sm-3 col-md-10 my-md-2 subtitulo">Las soluciones financieras digitales más vanguardistas ofreciendo las máximas garantías de la regulación mexicana.</p>
            </div>

            <hr class="container my-sm-2">
            <div class="d-flex flex-column align-items-end text-right">
                <h1 class="titulo pr-sm-5" data-aos="fade-right">Promovemos la Inversión <span class="display-1 font-weight-bold"> 2</span></h1>
                <p class="pr-sm-5 mr-sm-5 col-md-10 my-md-2 subtitulo">Con emprendedores y visionarios como tú, para detonar la próxima generación de Unicorns mexicanos y globales.</p>
            </div>
            <hr class="container my-sm-2">

            <h1 class="titulo pr-sm-5" data-aos="fade-left"><span class="display-1 font-weight-bold"> 3</span> Inspiramos y Divulgamos</h1>
            <p class="pl-sm-5 ml-sm-3 col-md-10 my-md-2 subtitulo">El conocimiento para fortalecer el ecosistema y desarrollar oportunidades de colaboración sin precedentes.</p>
        </div>
    </div>
</section>


<section class="my-sm-5 my-4" style="background-color: #F5F5F5">
    <div class="text-center py-5">
        <h1 class="titulo" data-aos="zoom-out">Registrate y participa en nuestras iniciativas.</h1>
        <h4 class="subtitulo mb-sm-5" data-aos="zoom-in">Desarrolla tu network y detona colaboraciones estratégicas...</h4>
        <a href="<?php echo get_bloginfo("url") ?>/eventos" class="button2 px-sm-5">Eventos Privados</a>
    </div>
    <div style="background-image: url('<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/Nosotros/people.png');" class="img-people"></div>
</section>


<section class="py-sm-5" id="neurodiversidad">
    <h1 class="titulo text-center" data-aos="zoom-in" data-aos-duration="2000">Neurodiversidad</h1>
    <div class="d-flex justify-content-center">
        <p class="text-justify subtitulo col-md-11 px-sm-4 mt-md-4"> Ser un <strong>“XY Booster”</strong> implica tener una combinación de cromosomas XY alterado.
            Es como ser un ¡X-Men! Hay que tener un poder que te hace vehementemente apasionado por algo.<br><br>
            ¡No!.. Definitivamente no somos gente normal, somos <strong>XY Boosters</strong>, somos hustlers, inconformistas por naturaleza.
            Vivimos bajo la religión de Peter Diamandis y sus principios <strong class="font-italic"> Peter's Laws </strong>
        </p>
    </div>

    <div class="cards-people">
        <div>
            <h1 class="titulo" data-aos="fade-up">Robert</h1>
            <p class="font-italic mb-sm-4">Strategy & #DyslexicThinking</p>
            <p class="text-justify">
                +30 años de experiencia en banca retail y digital (1/2 en Barcelona y 1/2 en México).
                Disruptor y emprendedor en serie. Especialista en Innovación y Open Banking.<br><br>
                <strong>Master Chef y Ave Fenix.</strong>
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Oswaldo</h1>
            <p class="font-italic mb-sm-4">Engineering</p>
            <p class="text-justify">
                +10 años desarrollando tecnología financiera.
                Co-founder de ComproPago ahora Spin by Oxxo, actualmente desarrollando DynamiCore un Marketplace para empresas financieras.<br><br>
                <strong>Nuestro Steve Wozniak. Amante del Blockchain y fiel seguidor de que la gente loca que piensa que puede cambiar el mundo, lo hace! Fintech+Art+Love.</strong>
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Alejandro</h1>
            <p class="font-italic mb-sm-4">Human Centered Design</p>
            <p class="text-justify">
                +10 años liderando equipos en retos de diseño estratégico y transformación organizacional. Enfoque orientado al equipo y centrado en el ser humano para abordar desafíos de experiencia de Cliente, diseño e interacción.
                <br><br>
                <strong>Un polímata nativo. Nuestro Galileo.</strong>
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Pedro</h1>
            <p class="font-italic mb-sm-4">Compliance</p>
            <p class="text-justify">
                +10 años en banca regulada y modelos de negocio innovadores. Actualmente Oficial de Cumplimiento de ICTINEO.
                <br><br>
                <strong>No se arruga ante nada. Creemos que su sangre de Quintana Roo le hace ver el código. Nuestro Neo.</strong>
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Miguel</h1>
            <p class="font-italic mb-sm-4">Payments</p>
            <p class="text-justify">
                +15 años en la industria financiera, SCRUM Master, regulation & feasibility expert and product development.
                <br><br>
                <strong>Nuestro Harry Potter de las Ventas.</strong>
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Ángeles</h1>
            <p class="font-italic mb-sm-4">Accounting</p>
            <p class="text-justify">
                +15 años como controller, administración y finanzas en el grupo. Ha visto de todo y le ha tocado vivir en las nubes y en el infierno.
                <br><br>
                <strong>Nuestra propia Margaret Thatcher.</strong>
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Alejandra</h1>
            <p class="font-italic mb-sm-4">Investors Relations</p>
            <p class="text-justify">
                +15 años asesorando en el manejo de inversiones a Clientes de banca comercial. No hay nada que interfiera en sus objetivos.
                <br><br>
                <strong>She delivers!! Workaholic & Salsa Dancer.</strong>
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Salma</h1>
            <p class="font-italic mb-sm-4">Legal Advice</p>
            <p class="text-justify">
                Abogada por profesión y defensora por vocación. Especialista en estrategia corporativa.
                <br><br>
                <strong>Siempre busca ”como sí” y cuida a muerte nuestros intereses. No sabemos como le hace pero después de la negociación mas dura, quieres abrazarla!</strong>
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Eduardo</h1>
            <p class="font-italic mb-sm-4">Lending</p>
            <p class="text-justify">
                Valida cualquier iniciativa de crédito antes de ver la luz, antes, durante y después del lanzamiento.
                <br><br>
                <strong>Nuestro Yoda del Lending: ¡Si no lo entiende mi abuelita, es que algo estamos haciendo mal!</strong>
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Luis</h1>
            <p class="font-italic mb-sm-4">Militante por la causa LGTBIQ+</p>
            <p>+5 años de experiencia, apasionado y estratégico en la elaboración de mecanismos y herramientas que pueden aproximar un negocio a sus seguidores, consumidores e inversores potenciales. imagina,
                conceptualiza y da forma visual a las ideas, coordinando después a sus equipos para generar un proyecto final.
            </p>
        </div>

        <div>
            <h1 class="titulo" data-aos="fade-up">Marc</h1>
            <p class="font-italic">Customer Experience</p>
            <p class="text-justify">
                Ingeniero de Telecos de formación, obsesionado con el uso de los datos y la tecnología para la mejora de la experiencia de clientes. Marc ha vivido en más de 7 paises y liderado programas de innovación e inteligencia de los Clientes más vanguardistas del mundo. Co-Fundador de The CX Lab y Xpats. Live Borderless.
                <br><br>
                <strong>Nuestro Eddy Merckx!! Literal puede subirse por la paredes sin que se le agite el pulso.</strong>
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Abe</h1>
            <p class="font-italic mb-sm-4">Digital Marketing</p>
            <p class="text-justify">
                Lic. en Sistemas y especialidad en Mercadotecnia. Más de 12 años de experiencia en marketing digital, fundador de <a href="https://clico.mx/" target="_blank">clico.mx</a>.
                Con perfil técnico y estratégico, a trabajado en proyectos de Marketing Digital de alto impacto para Soriana, Telcel, Axa, Sr. Pago, Clip, Bancompara, Mastercard, Banco de Costa Rica, entre otros.
            </p>
        </div>
        <div>
            <h1 class="titulo" data-aos="fade-up">Carmen</h1>
            <p class="font-italic mb-sm-4">Activista de mujeres de alto impacto</p>
            <p class="text-justify">
                +25 años de experiencia en entrenamiento de equipos de venta comercial, Secretaria de ASECEM CDMX MUJERES DE ALTO IMPACTO, Consejal de ASECEM NACIONAL.
                Conductora del programa salud financiera en Change TV. Estoy a favor de la inclusión y apoyo a las mujeres Emprendedoras y Empresarias para que se empoderen en todos los ámbitos. Le gusta escuchar a las personas y contribuir a su desarrollo personal para alcanzar el éxito.
                <br><br><strong>Su mantra: When there is a Will there is a Way</strong>
            </p>
        </div>
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