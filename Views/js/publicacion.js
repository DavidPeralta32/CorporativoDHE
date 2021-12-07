


let nIdPublicacionGlobal;

function listarPublicaciones() {

    var _myObjAjax = $.ajax({
        type: "POST",
        datatype: "json",
        data: {function: "listarPublicaciones"},
        url: "../controllers/publicacionController.php"
    });
    _myObjAjax.done(function (event) {
        var oDatos = JSON.parse(event);
        $("#TablaPublicacion tbody").empty();
        if(oDatos != false){
        $.each(oDatos, function (index, obj) {
            $("#TablaPublicacion tbody").append("<tr> " +
                    "<td  style='text-align: left; color:black; width:100px;'>" + obj.nIdPublicacion + "</td>" +
                    "<td  style='text-align: left;' class='sContenidotd' >" + obj.sContenido + "</td>" +
                    "<td  style='text-align: center; width:180px;' >" + obj.dFecha + "</td>" +
                    "<td  style='text-align: center; width:10px;'><button type='button' id='btnEditar' onclick='mostrarPublicacionID(" + obj.nIdPublicacion + ")' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#ModalEditarPublicacion' >Editar</button></td>" +
                    "<td  style='text-align: center; width:10px;'><button type='button' onclick='eliminarPublicacion(" + obj.nIdPublicacion + ")' class='btn btn-danger btn-sm'>Eliminar</button></td>" +
                    "</tr>");
        });
        }else{
            alert("no hay publicaciones")
        }
    });

}

function insertarPublicacion(){
    let Contenido = editorAgregar.getData();
    let ajaxMostrarPublicacion = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function: "insertarPublicacion",
            sContenido : Contenido
        },
        url: "../controllers/publicacionController.php"
    });
    ajaxMostrarPublicacion.done(function(event){
        let oDatos = JSON.parse(event);
        if (oDatos === true) {
            alert("Agregado con exito");
            listarPublicaciones();
            $("#ModalAgregarPublicacion").modal('hide');
            limpiarEditor();
        }else{
            alert("Error al agregar la publicacion")
        }
    });
}


//Mostrar datos de Publicacion Por Id seleccionado
function mostrarPublicacionID(IdPublicacion){
    let ajaxMostrarPublicacion = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function: "mostrarPublicacionID",
            nIdPublicacion : IdPublicacion
        },
        url: "../controllers/publicacionController.php"
    });
    ajaxMostrarPublicacion.done(function(event){
        let oDatos = JSON.parse(event);
        console.log(oDatos);
        if (oDatos.length > 0) {
            nIdPublicacionGlobal = oDatos[0].nIdPublicacion;
            editor.setData(oDatos[0].sContenido);
        }
    });
}


//Actualizar Publicacion
function actuaizarPublicacion(){
    let Contenido =editor.getData();
    let fecha = new Date().format('Y-m-d h:i:s'); 

    let ajaxActualizarPublicacion = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function: "actuaizarPublicacion",
            nIdPublicacion : nIdPublicacionGlobal,
            sContenido : Contenido,
            dFecha : fecha
        },
        url: "../controllers/publicacionController.php"
    });
    ajaxActualizarPublicacion.done(function(event){
        let oDatos = JSON.parse(event);
        console.log(oDatos);
        if (oDatos === true) {
            alert("Publicacion Actualizado con exito");
            listarPublicaciones();
            $("#ModalEditarPublicacion").modal('hide');
        }else{
            alert(oDatos);
        }
    });
}


//Eliminar Publicacion
function eliminarPublicacion(IdPublicacion){
    let ajaxEliminarPublicacion = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function: "eliminarPublicaciones",
            nIdPublicacion : IdPublicacion
        },
        url: "../controllers/publicacionController.php"
    });
    ajaxEliminarPublicacion.done(function(event){
        let oDatos = JSON.parse(event);
        if(oDatos === true){
            alert("Publicacion eliminada con exito")
            listarPublicaciones();
        }else{
            alert("Error al eliminar publicacion");
        }
    });
}


function limpiarEditor(){
    editorAgregar.setData("");
}