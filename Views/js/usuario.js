
let nIdUsuario = 1;

function loginUsuario(){
    console.log($("#sUsuario").val());
    let ajaxLogin = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function: "loguearUsuario",
            sUsuario: $("#sUsuario").val(),
            sPassword: $("#Password").val()
        },
        url: "../controllers/usuariosController.php"
    });
    ajaxLogin.done(function(event){
        let oDatos = JSON.parse(event);   
        if(oDatos.length > 0){
            //nIdUsuario = oDatos.nIdUsuario;
           window.location.replace("publicacionView.php");
        }else{
            alert("Credenciales incorrectas");
        }
    });
}

