$(document).ready(function () {

    $('.Departamento').html("<option value='0' class='Nombre_Departamento'>Elige tu departamento</option>")
    $('.Ciudad').html("<option value='0' class='Nombre_Ciudad'>Elige tu ciudad</option>")

    $.getJSON('Json/Info_Colombia.json', function (data) {
        $.each(data, function (id, Elemento) {
            $(".Nombre_Departamento").after('<option name="departamento">' + id + '</option>');
        });
    });

    $.getJSON('Json/Info_Colombia.json', function (data) {
        $.each(data, function (id, Elemento) {
            for (i in Elemento) {
                $(".Nombre_Ciudad").after('<option name="ciudad">' + Elemento[i] + '</option>');
            }
        });
    });



    jQuery.validator.addMethod('name_rule', function (value, element) {
        if (/^[a-zA-Z]+[a-zA-Z]+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    });

    jQuery.validator.addMethod('lastname_rule', function (value, element) {
        if (/^[a-zA-ZÀ-ÿ\s]{3,15}$/.test(value)) {
            return true;
        } else {
            return false;
        };
    });

    $('#Formulario_Agregar').validate({
        rules: {
            nombre: {
                required: true,
                name_rule: true
            },
            apellido: {
                required: true,
                lastname_rule: true
            },
            telefono: {
                required: true,
                minlength: 10,
                maxlength: 10,
                phoneUS: true
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            nombre: {
                required: "Ingresa Tu Nombre",
                name_rule: "Ingrese nombre valido"
            },
            apellido: {
                required: "Ingresa Tu Apellido",
                lastname_rule: "Ingrese apellido valido"
            },
            telefono: {
                required: "Ingresa Tu Telefono",
                minlength: "Deben ser 10 Digitos",
                maxlength: "Deben ser 10 Digitos",
                phoneUS: "Solo Numeros"

            },
            email: {
                required: "Ingresa Tu Email",
                email:"Solo email permitido"
            }
        }
    })

    $(".Nuevo_Cliente").click(function () {
        if($(".Departamento").val()!=="0"){
            $('#departamento').html("<span class='texto_verde'>Correcto</span>")
        }else{
            $('#departamento').html("<span class='texto'>*Selecciona una opcion</span>")
        }

        if($(".Ciudad").val()!=="0"){
            $('#ciudad').html("<span class='texto_verde'>Correcto</span>")
        }else{
            $('#ciudad').html("<span class='texto'>*Selecciona una opcion</span>")
        }


    })







});