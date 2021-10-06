$(document).ready(function () {

    $('.Departamento').html("<option class='Nombre_Departamento' selected>Elige tu departamento</option>")
    $('.Ciudad').html("<option class='Nombre_Ciudad' selected>Elige tu ciudad</option>")

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

    //$(".Nuevo_Cliente").click(function () {
        //    jQuery("#Formulario_Agregar").validate({
          //      rules: {
            //        nombre: {
              //          required: true
                //    }
                //},
                ///messages: {
                   ///nombre: {
                      //  required: "Ingresa Tu Nombre"
                    //}
                //}
            //})
        
        
        
      

    //})

   



});




