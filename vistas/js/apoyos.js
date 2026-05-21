/*=============================================
VER MÁS INFO DEL APOYO
=============================================*/
$(".tablaApoyos").on("click", ".btnVerMas", function(e){
    e.preventDefault();
    let infoCompleta = $(this).attr("data-info");
    $("#textoInfoCompleta").text(infoCompleta);
});

/*=============================================
CAMBIAR ESTADO APOYO DUAL
=============================================*/
$(document).on("click", ".btnActivarDual", function(){
    let boton = $(this);
    let idApoyo = boton.attr("idApoyo");
    let estadoDual = boton.attr("estadoDual");

    let datos = new FormData();
    datos.append("idApoyoDual", idApoyo);
    datos.append("estadoDual", estadoDual);

    $.ajax({
        url: "ajax/apoyos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            if (respuesta.trim() === "ok"){
                if (estadoDual == 1) { // De 0 a 1 (Sí)
                    boton.removeClass("btn-danger");
                    boton.addClass("btn-success");
                    boton.html("Sí");
                    boton.attr("estadoDual", 0);
                } else { // De 1 a 0 (No)
                    boton.removeClass("btn-success");
                    boton.addClass("btn-danger");
                    boton.html("No");
                    boton.attr("estadoDual", 1);
                }
            }
        }
    });
});

/*=============================================
EDITAR APOYO
=============================================*/
$(".tablaApoyos").on("click", ".btnEditarApoyo", function(){
    let idApoyo = $(this).attr("idApoyo");
    let datos = new FormData();
    console.log(idApoyo);
    datos.append("idApoyo", idApoyo);

    $.ajax({
        url: "ajax/apoyos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            $("#idApoyo").val(respuesta["id_apoyo"]);
            $("#editarDescripcionApoyo").val(respuesta["descripcion_apoyo"]);
            $("#editarInformacionApoyo").val(respuesta["informacion_apoyo"]);
            $("#editarApoyoIcono").val(respuesta["apoyo_icono"]);

            if(respuesta["apoyo_dual"] == 1){
                $("#editarApoyoDualSi").prop("checked", true);
            } else {
                $("#editarApoyoDualNo").prop("checked", true);
            }
        }
    })
});

/*=============================================
ELIMINAR APOYO
=============================================*/
$(".tablaApoyos").on("click", ".btnEliminarApoyo", function(){
    let idApoyo = $(this).attr("idApoyo");

    Swal.fire({
        title: '¿Está seguro de borrar el apoyo?',
        text: "¡Si no lo está puede cancelar la acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar apoyo!'
    }).then(function(result){
        if(result.value){
            window.location = "index.php?ruta=apoyos&idApoyoEliminar="+idApoyo;
        }
    })
});
