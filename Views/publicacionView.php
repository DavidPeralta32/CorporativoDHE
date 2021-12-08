<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ./loginView.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/publicacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Publicacion</title>
    <script src="../includes/ckeditor5/ckeditor.js"></script>
    <script src="./js/Date.format.min.js"></script>



</head>

<body>
    <div class="contenedor">
        <div class="CerrarSesion">
            <a href="cerrarSesion.php">Cerrar Session</a>
        </div>
        <div class="titulo">
            <h1>Gestion de Publicaciones</h1>
        </div>

        <div class="btnAgregarPubicacion">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-focus="true"
                data-bs-target="#ModalAgregarPublicacion" data-bs-backdrop="static" data-keyboard="false">
                Agregar
            </button>
        </div>
        <!-----------------------------------------------TABLA ARTICULOS----------------------------------------------------------------->
        <div class="" style="width: 80%">
            <table id="TablaPublicacion" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style='text-align: center;'>ID</th>
                        <th scope="col" style='text-align: center;' class='sContenido'>Contenido</th>
                        <th scope="col" style='text-align: center;'>Fecha</th>
                        <th scope="col" style='text-align: center;'>Editar</th>
                        <th scope="col" style='text-align: center;'>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="datosPublicacion" style="font-size: 13.5px; width: 100%">
                </tbody>
            </table>
        </div>
    </div>
    <!------------------------------------- TERMINA LA TABLA DE ARTICULOS  --------------------------->


    <!------------------------------------- Modal Editar Publicacion  --------------------------->
    <div class="modal fade" id="ModalEditarPublicacion" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width: 100%;display: flex; flex-wrap: wrap;justify-content: center;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Publicacion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body-editar sContenidoModal" style="padding: 10px;">
                    <textarea id="sPublicacion" cols="50" rows="50"></textarea>
                </div>
                <div class="modal-footer" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="actuaizarPublicacion();">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------ Fin  Modal  Editar Publicacion --------------------------------->

    <!------------------------------------- Modal Agregar Publicacion  --------------------------->
    <div class="modal fade" id="ModalAgregarPublicacion" data-bs-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Publicacion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body-editar sContenidoModal" style="padding: 10px;">
                    <textarea id="sAgregarPublicacion" class="my-align-left,my-align-right" cols="50" rows="10"></textarea>
                </div>
                <div class="modal-footer" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        onclick="limpiarEditor();">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="insertarPublicacion()">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------ Fin  Modal  agregar Publicacion --------------------------------->
    </div>
    <script>
    let editor;
    let editorAgregar;


    $(document).ready(function() {
        listarPublicaciones();
        //ckEditor AgregarPublicacion
        ClassicEditor
            .create(document.querySelector('#sAgregarPublicacion'))
            .then(newEditorAgregar => {
                editorAgregar = newEditorAgregar;
            })
            .catch(error => {
                console.error(error);
            });

        //ckEditor EditarPublicacion
        ClassicEditor
            .create(document.querySelector('#sPublicacion'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });

    });
    </script>

    <script type="text/javascript" src="./JS/publicacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>