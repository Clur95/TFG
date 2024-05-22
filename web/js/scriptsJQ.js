$(document).ready(function () {

    $(".submenus").hide();

    // PULSAR EN COMPAÑÍAS

    $(".companias").click(function () {

        for (let i = 1; i <= $(".companias").length; i++) {

            if ($(this).attr("id") == i) {

                $("#submenu" + i).slideToggle(150);
                $(".submenus:not(#submenu" + i + ")").hide();

                $(this).toggleClass("pulsado");
                $(".companias:not(#" + i + ")").removeClass("pulsado");
                $("#contenedorReservas" + i).load("carga_reserva.php", { compania: i});
            }
        }
    })

    // FENVÍO FORMULARIO Y CARGA ASÍNCRONA

    $(".formsReservas").submit( function (evento) { // Forulario en sí mismo

        for (let i = 1; i <= $(".companias").length; i++) {

            if ($(this).attr("id") == "formReserva" + i) {

                evento.preventDefault();
                var form = document.querySelector("#" + $(this).attr("id")); //Tiene que ser así. Con $(#id) no funciona
                var formData = new FormData(form);
                console.log(formData);

                formData.append("i", i); // (Campo a insertar, valor) entre comillas o no va, excepto si es una variable
                $.ajax({
                    url: "insertar_reserva.php",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                .done(function (res) {
                    $(".formsModales").modal("hide"); // Todo el formulario (todos los div del modal)
                    $("#contenedorReservas" + i).load("carga_reserva.php", { compania: i});
                });
            }
        }
    });
})