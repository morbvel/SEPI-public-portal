$(document).ready(function() {
    $('#contacto').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        fields: {
            asunto: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo Asunto'
                    }
                }
            },
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo Nombre'
                    }
                }
            },
            apellidos: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo Apellido'
                    }
                }
            },
            organizacion: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo organizacion'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo teléfono'
                    }
                }
            },
            nombreOrganizacion: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo organizacion'
                    }
                }
            },
            consulta: {
                validators: {
                    notEmpty: {
                        message: 'No se ha completado el campo consulta'
                    }
                }
            },
            mail: {
                validators: {
                    notEmpty: {
                        message: 'Compruebe que su mail es correcto'
                    },
                    emailAddress: {
                        message: 'Compruebe que su mail es correcto'
                    }
                }
            },
            agree1: {
                validators: {
                    notEmpty: {
                        message: 'Debe aceptar las condiciones legales'
                    }
                }
            }
        }
    });
    $('.formulario_errores').hide();
    $('.formulario_ok').hide();
    $( ".formulario_check_errores" ).click(function() {
      $('div.form-group').each(function() {
    if ($('fv-hidden-submit').is(':disabled')) {
        $('.formulario_ok').show();
        $('.formulario_errores').hide();
        } else { 
            $('.formulario_errores').show();
            $('.formulario_ok').hide();
        }
    });
    });
    
   
});




/*  $(document).ready(function () {

var menu = $('#sticky');
var origOffsetY = menu.offset().top;

function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
        $('#sticky').addClass('sticky');
        $('.content').addClass('menu-padding');
    } else {
        $('.menu').removeClass('sticky');
        $('.content').removeClass('menu-padding');
    }


   }

  document.onscroll = scroll;

});*/