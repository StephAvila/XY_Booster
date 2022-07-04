$(function() {
    var window_size = window.matchMedia('(max-width: 1200px)');
    console.log(window_size);
    if (window.matchMedia('(max-width: 1200px)').matches) {
        //Nosotros
        $('#menu-item-132').bind('click', function() {
            window.location += '/nosotros/#manifiesto';
            $("#nav-toggle > span").click();

        });
        $('#menu-item-133').bind("click", function() {
            window.location += '/nosotros/#QueHacemos';
            $("#nav-toggle > span").click();

        });
        $('#menu-item-134').bind("click", function() {
            window.location += '/nosotros/#neurodiversidad';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-240').bind("click", function() {
            window.location += '/nosotros/#competitiva';
            $("#nav-toggle > span").click();
        });


        //PLATAFORMA
        $('#menu-item-110').bind('click', function() {
            window.location += '/plataforma/#cxlab';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-113').bind('click', function() {
            window.location += '/plataforma/#xybooster';
            $("#nav-toggle > span").click();
        });

        //UNICORNS
        $('#menu-item-115').bind('click', function() {
            window.location += '/proximos-unicorns/#xpats';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-116').bind('click', function() {
            window.location += '/proximos-unicorns/#colors';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-117').bind('click', function() {
            window.location += '/proximos-unicorns/#creditaco';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-118').bind('click', function() {
            window.location += '/proximos-unicorns/#evolve';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-119').bind('click', function() {
            window.location += '/proximos-unicorns/#loved';
            $("#nav-toggle > span").click();
        });
        $('#menu-item-120').bind('click', function() {
            window.location += '/proximos-unicorns/#unidos';
            $("#nav-toggle > span").click();
        });

    } else {
        //NOSOTROS
        $('#menu-item-132').bind('click', function() {
            window.location += '/nosotros/#manifiesto';
        })
        $('#menu-item-133').bind("click", function() {
            window.location += '/nosotros/#QueHacemos';
        });
        $('#menu-item-134').bind("click", function() {
            window.location += '/nosotros/#neurodiversidad';
        });
        $('#menu-item-240').bind("click", function() {
            window.location += '/nosotros/#competitiva';
        });

        //PLATAFORMA
        $('#menu-item-110').bind('click', function() {
            window.location += '/plataforma/#cxlab';
        });
        $('#menu-item-113').bind('click', function() {
            window.location += '/plataforma/#xybooster';
        });

        //UNICORNS
        $('#menu-item-115').bind('click', function() {
            window.location += '/proximos-unicorns/#xpats';
        });
        $('#menu-item-116').bind('click', function() {
            window.location += '/proximos-unicorns/#colors';
        });

        $('#menu-item-117').bind('click', function() {
            window.location += '/proximos-unicorns/#creditaco';
        });
        $('#menu-item-118').bind('click', function() {
            window.location += '/proximos-unicorns/#evolve';
        });
        $('#menu-item-119').bind('click', function() {
            window.location += '/proximos-unicorns/#loved';
        });
        $('#menu-item-120').bind('click', function() {
            window.location += '/proximos-unicorns/#unidos';
        });

    }


    $("#form-contact").validate({
        rules: {
            given_name: {
                required: true,
                minlength: 3
            },
            surname: { required: true, minlength: 3 },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            country: {
                required: "#country:visible"
            },
            contact_time: { required: "#horario_llamada:visible" }
        },
        messages: {
            given_name: {
                required: " Introduzca su(s) nombre(s) completo",
                minlength: "Nombre de al menos 3 caracteres."
            },
            surname: {
                required: "Introduzca su(s) apellido(s)",
                minlength: "Apellido de al menos 3 caracteres."
            },
            email: {
                required: " Introduzca su correo electrónico",
                email: " El email debe estar en formato: abc@domain"
            },
            phone: {
                required: " Introduzca su número celular a 10 dígitos",
                digits: " Por favor introduzca solo dígitos",
                minlength: " El número debe ser a 10 dígitos"
            },
            country: {
                required: "Introduzca tu ciudad de residencia"
            },
            contact_date: { required: " Elija una fecha de preferencia" },
            contact_time: { required: " Elija un horario de preferencia" }
        }
    });

    $("#Enviar").on('click', function() {
        $("#form-contact").valid();
        var values = $('#form-contact').serialize();
        $('#imgLoading').hide().show();
        $('#msg').hide();

        //console.log(values)

        if ($("#form-contact").valid()) {

            $.ajax({
                url: "https://api.clico.com.mx/api/xybooster/createcontact",
                type: "post",
                data: values,
                success: function(response) {
                    $('#imgLoading').hide();
                    if (response.code == '200') {
                        $('#msg').empty().append("<p class='h5'> <br>Su solicitud fue enviada exitosamente, ¡Gracias por contactarnos!</p>");
                        $('#msg').hide().show();
                        console.log($('#msg'));
                        $("#form-contact").trigger("reset");
                        if (values.indexOf("source=contacto") > -1) {
                            window.location = '../typ-contacto';
                        } else if (values.indexOf("source=newsletter") > -1) {
                            window.location = '../typ-newsletter';
                        } else if (values.indexOf("source=asesores") > -1) {
                            window.location = '../typ-hiring';
                        }

                    } else {
                        $('#msg').empty().append("<p> Ha ocurrido un error al enviar tu mensaje, por favor intente nuevamente</p>");
                        $('#msg').hide().show();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    console.log(values);

                    $('#msg').empty().append("<p class='h5'><br> Ha ocurrido un error al enviar tu mensaje, por favor intente nuevamente </p>");
                    $('#msg').hide().show();
                    $('#imgLoading').hide();
                }
            })

        } else {
            $('#msg').empty().append("<p class='h5 px-4 text-center text-danger'> Por favor llene todos los campos e intente nuevamente</p>");
            $('#msg').hide().show();
            $('#imgLoading').hide();
        }


    });
});


function showImg(img) {

    if (img == 2) {
        $('#collapseTwoImg').hide().show();
        $('#collapseTwo').hide().slideDown();
        $('#collapseOneImg').hide();
        $('#collapseThreeImg').hide();
        $('#collapseFourImg').hide();
        $('#collapseFiveImg').hide();
        $('#collapseSixImg').hide();
        $('#collapseOne').hide();
        $('#collapseThree').hide();
        $('#collapseFour').hide();
        $('#collapseFive').hide();
        $('#collapseSix').hide();

    } else if (img == 3) {
        $('#collapseThreeImg').hide().show();
        $('#collapseThree').hide().slideDown();
        $('#collapseOneImg').hide();
        $('#collapseTwoImg').hide();
        $('#collapseFourImg').hide();
        $('#collapseFiveImg').hide();
        $('#collapseSixImg').hide();
        $('#collapseOne').hide();
        $('#collapseTwo').hide();
        $('#collapseFour').hide();
        $('#collapseFive').hide();
        $('#collapseSix').hide();
    } else if (img == 4) {
        $('#collapseFourImg').hide().show();
        $('#collapseFour').hide().slideDown();
        $('#collapseOneImg').hide();
        $('#collapseTwoImg').hide();
        $('#collapseThreeImg').hide();
        $('#collapseFiveImg').hide();
        $('#collapseSixImg').hide();
        $('#collapseOne').hide();
        $('#collapseTwo').hide();
        $('#collapseThree').hide();
        $('#collapseFive').hide();
        $('#collapseSix').hide();
    } else if (img == 5) {
        $('#collapseFiveImg').hide().show();
        $('#collapseFive').hide().slideDown();
        $('#collapseOneImg').hide();
        $('#collapseTwoImg').hide();
        $('#collapseThreeImg').hide();
        $('#collapseFourImg').hide();
        $('#collapseSixImg').hide();
        $('#collapseOne').hide();
        $('#collapseTwo').hide();
        $('#collapseThree').hide();
        $('#collapseFour').hide();
        $('#collapseSix').hide();
    } else if (img == 6) {
        $('#collapseSixImg').hide().show();
        $('#collapseSix').hide().slideDown();
        $('#collapseOneImg').hide();
        $('#collapseTwoImg').hide();
        $('#collapseThreeImg').hide();
        $('#collapseFourImg').hide();
        $('#collapseFiveImg').hide();
        $('#collapseOne').hide();
        $('#collapseTwo').hide();
        $('#collapseThree').hide();
        $('#collapseFive').hide();
        $('#collapseFour').hide();
    } else {
        $('#collapseOneImg').hide().show();
        $('#collapseOne').hide().slideDown();
        $('#collapseFiveImg').hide();
        $('#collapseTwoImg').hide();
        $('#collapseThreeImg').hide();
        $('#collapseFourImg').hide();
        $('#collapseSixImg').hide();
        $('#collapseFour').hide();
        $('#collapseTwo').hide();
        $('#collapseThree').hide();
        $('#collapseFive').hide();
        $('#collapseSix').hide();
    }
}