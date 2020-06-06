$(document).ready(function () {

// Validación del formulario para añadir una actividad
    $("#formularioActividad").validate({
        rules: {
            titulo: {
                required: true,
                minlength: 6
            },
            categoria: {
                required: true
            },
            descripcion_actividad: {
                required: true,
                minlength: 150

            },
            portada: {
                required: true
            },
            poblacion_id: {
                required: true
            }


        }, messages: {
            titulo: {
                required: "Debes introducir el título de la actividad",
                minlenght: "El título debe tener un mínimo de 6 caracteres"
            },
            categoria: {
                required: "Debes seleccionar una categoría"
            },
            descripcion_actividad: {
                required: "Debes introducir la descripción de la actividad",
                minlenght: "La descripción debe tener un mínimo de 150 caracteres"
            },
            portada: {
                required: "Por favor, introduce una imagen para ilustrar la actividad"
            },
            poblacion_id: {
                required: "Por favor, selecciona la población"
            }
        }, //messages
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            /*Colocamos el mensaje de error debajo del texto del checKbox
             porque aparecía encima*/
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        //Mostramos colores
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
    // Validación del formulario para editar una actividad
    $("#formularioEditarActividad").validate({
        rules: {
            titulo: {
                required: true,
                minlength: 6
            },
            categoria: {
                required: true
            },
            descripcion_actividad: {
                required: true,
                minlength: 150

            },
            portada: {
                required: true
            },
            poblacion_id: {
                required: true
            }


        }, messages: {
            titulo: {
                required: "Debes introducir el título de la actividad",
                minlenght: "El título debe tener un mínimo de 6 caracteres"
            },
            categoria: {
                required: "Debes seleccionar una categoría"
            },
            descripcion_actividad: {
                required: "Debes introducir la descripción de la actividad",
                minlenght: "La descripción debe tener un mínimo de 150 caracteres"
            },
            portada: {
                required: "Por favor, introduce una imagen para ilustrar la actividad"
            },
            poblacion_id: {
                required: "Por favor, selecciona la población"
            }
        }, //messages
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            /*Colocamos el mensaje de error debajo del texto del checKbox
             porque aparecía encima*/
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        //Mostramos colores
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
    // Validación del formulario para añadir un comentario
    $("#formularioComentario").validate({
        rules: {
            comentario: {
                required: true,
                minlength: 50
            },
	    fecha_comentario: {
                required: true
            }

        }, messages: {
            comentario: {
                required: "Debes introducir un comentario",
                minlenght: "El comentario debe tener un mínimo de 50 caracteres"
            },
	    fecha_comentario: {
                required: "Debes introducir una fecha"
            }
        }, //messages
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            /*Colocamos el mensaje de error debajo del texto del checKbox
             porque aparecía encima*/
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        //Mostramos colores
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
    $("#formularioEditarComentario").validate({
        rules: {
            comentario: {
                required: true,
                minlength: 50
            },
	    fecha_comentario: {
                required: true
            }

        }, messages: {
            comentario: {
                required: "Debes introducir un comentario",
                minlenght: "El comentario debe tener un mínimo de 50 caracteres"
            },
	    fecha_comentario: {
                required: "Debes introducir una fecha"
            }
        }, //messages
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            /*Colocamos el mensaje de error debajo del texto del checKbox
             porque aparecía encima*/
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        //Mostramos colores
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
    $("#formularioImagen").validate({
        rules: {
            img: {
                required: true
            }

        }, messages: {
            img: {
                required: "Debes introducir una imagen",
            }

        }, //messages
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            /*Colocamos el mensaje de error debajo del texto del checKbox
             porque aparecía encima*/
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        //Mostramos colores
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    //Traducción de los mensajes por defecto
    jQuery.extend(jQuery.validator.messages, {
        required: "Este campo es obligatorio.",
        email: "Por favor, introduce una dirección de email válida",
        minlength: jQuery.validator.format("El campo debe tener un mínimo de {0} caracteres."),
        maxlength: jQuery.validator.format("El campo debe tener un máximo de {0} caracteres.")
    });
    //// Validación del formulario de login
//    $("#formularioLogin").validate({
//        rules: {
//            email: {
//                required: true,
//                mail: true
//            },
//            password: {
//                required: true,
//                minlength: 6
//            }
//
//        }, messages: {
//            email: {
//                required: "Por favor, escriba su dirección de email",
//                mail: "Por favor, escriba una dirección de email válida"
//            },
//            password: {
//                required: "Por favor, escribe tu contraseña",
//                minlenght: "La contraseña debe tener un mínimo de 6 caracteres"
//            }
//        }, //messages
//        errorPlacement: function (error, element) {
//            error.addClass("invalid-feedback");
//            /*Colocamos el mensaje de error debajo del texto del checKbox
//             porque aparecía encima*/
//            if (element.prop("type") === "checkbox") {
//                error.insertAfter(element.next("label"));
//            } else {
//                error.insertAfter(element);
//            }
//        },
//        //Mostramos colores
//        highlight: function (element, errorClass, validClass) {
//            $(element).addClass("is-invalid").removeClass("is-valid");
//        },
//        unhighlight: function (element, errorClass, validClass) {
//            $(element).addClass("is-valid").removeClass("is-invalid");
//        }
//    });
// Validación del formulario de registro
//    $("#formularioRegistro").validate({
//        rules: {
//            nombre: {
//                required: true,
//                minlength: 2,
//                maxlength: 50
//            },
//            apellidos: {
//                required: true,
//                minlength: 2,
//                maxlength: 100
//            },
//            name: {
//                required: true,
//                minlength: 2,
//                maxlength: 10
//            },
//            email: {
//                required: true,
//                mail: true
//            },
//            password: {
//                required: true,
//                minlength: 6
//            },
//            colaborador: {
//                required: true
//
//            }
//
//        }, messages: {
//            nombre: {
//                required: "Por favor introduzca su nombre",
//                minlength: "El campo nombre debe tener un mínimo de dos caracteres",
//                maxlength: "El campo nombre no puede tener más de 50 caractéres"
//            },
//            apellidos: {
//                required: "Por favor introduzca sus apellidos",
//                minlength: "El campo apellidos deben tener un mínimo de dos caracteres",
//                maxlength: "El campo apellidos no puede tener más de 100 caractéres"
//            },
//            name: {
//                required: "Por favor introduzca su nombre de usuario",
//                minlength: "El campo nombre de usuario deben tener un mínimo de dos caracteres",
//                maxlength: "El campo nombre de usuario no puede tener más de 10 caractéres"
//            },
//            email: {
//                required: "Por favor, escriba su dirección de email",
//                mail: "Por favor, escriba una dirección de email válida"
//            },
//            password: {
//                required: "Por favor, escribe tu contraseña",
//                minlenght: "La contraseña debe tener un mínimo de 6 caracteres"
//            },
//            colaborador: {
//                required: "Por vfavor, selecciona cómo quieres registrarte"
//
//            }
//        }, //messages
//        errorPlacement: function (error, element) {
//            error.addClass("invalid-feedback");
//            /*Colocamos el mensaje de error debajo del texto del checKbox
//             porque aparecía encima*/
//            if (element.prop("type") === "checkbox") {
//                error.insertAfter(element.next("label"));
//            } else {
//                error.insertAfter(element);
//            }
//        },
//        //Mostramos colores
//        highlight: function (element, errorClass, validClass) {
//            $(element).addClass("is-invalid").removeClass("is-valid");
//        },
//        unhighlight: function (element, errorClass, validClass) {
//            $(element).addClass("is-valid").removeClass("is-invalid");
//        }
//    });
});
