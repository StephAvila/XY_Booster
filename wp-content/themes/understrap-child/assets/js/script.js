$(document).on('click', '.navbar-collapse.in', function(e) {
    if ($(e.target).is('a')) {
        $(this).collapse('hide');
    }
});
$(function() {
    // Remove the transition class
    var square = document.querySelector('.square');
    let fadeLeft = document.querySelector('.fade-in-left');
    let scrollDown = document.querySelector('.item0');
    let fadeDown = document.querySelector('.portafolio');

    let zoom = document.querySelector('.foto1');
    let zoom2 = document.querySelector('.foto3');
    square.classList.remove('square-transition');
    fadeLeft.classList.remove('square-transition');
    scrollDown.classList.remove('square-transition');
    fadeDown.classList.remove('square-transition');
    zoom.classList.remove('square-transition');
    zoom2.classList.remove('square-transition');


    // Create the observer, same as before:
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                square.classList.add('square-transition');
                return;
            }
            square.classList.remove('square-transition');
        });
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                scrollDown.classList.add('square-transition');
                return;
            }
            scrollDown.classList.remove('square-transition');
        });
    });
    observer.observe(document.querySelector('.square-wrapper'));


    const observer3 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                fadeLeft.classList.add('square-transition');
                return;
            }
            fadeLeft.classList.remove('square-transition');
        });
    });
    observer3.observe(document.querySelector('.square-wrapper3'));


    const observer4 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                fadeDown.classList.add('square-transition');
                return;
            }
            fadeDown.classList.remove('square-transition');
        });
    });
    observer4.observe(document.querySelector('.square-wrapper4'));

    const observer5 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                zoom.classList.add('square-transition');
                zoom2.classList.add('square-transition');
                return;
            }
            zoom.classList.remove('square-transition');
            zoom2.classList.remove('square-transition');

        });
    });
    observer5.observe(document.querySelector('.square-wrapper4'));
});

$(function() {
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
            contact_date: {
                required: "#fecha_llamada:visible"
            },
            contact_time: { required: "#horario_llamada:visible" }
        },
        messages: {
            given_name: {
                required: " Introduzca su(s) nombre(s) completo",
                minlength: "Nombre de al menos 3 caracteres."
            },
            surname: {
                required: " Introduzca su(s) apellido(s)",
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