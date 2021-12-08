

function listarPublicaciones(){
    var _myObjAjax = $.ajax({
        type: "POST",
        datatype: "json",
        data: {function: "listarPublicaciones"},
        url: "../controllers/publicacionController.php"
    });
    _myObjAjax.done(function(event){
        var oDatos = JSON.parse(event);
        $("#contendorPublicaciones").empty();
        if(oDatos.length > 0){
            $.each(oDatos, function (index, obj) {
                $("#contendorPublicaciones").append("<div class='publicacion'> "+ obj.sContenido +"</div>");
            });
        }else{
            $("#contendorPublicaciones").append("<div class='publicacion'><h2>¡No hay Noticias!</h2></div>");
        }
    });
}