<?php session_start();

include_once '../Models/publicacion.php';



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $oPublicacionController = new publicacionController();

    $sFuncion = $_POST['function'];

    switch ($sFuncion) {
        case 'insertarPublicacion':
            echo json_encode($oPublicacionController->insertarPublicacion());
            break;

        case 'listarPublicaciones':
            echo json_encode($oPublicacionController->listarPublicacion());
            break;
    
        case 'eliminarPublicaciones':
            echo json_encode($oPublicacionController->eliminarPublicacion());
            break;

        case 'mostrarPublicacionID':
            echo json_encode($oPublicacionController->traerPublicacionPorId());
            break;

        case 'actuaizarPublicacion':
            echo json_encode($oPublicacionController->actualizarPublicacion());
            break;

        default:
            # code...
            break;
    }
}




class publicacionController {
    private $oPublicacion;

    public function __construct()
    {
        $this->oPublicacion = new Publicacion();
    }

    //listar todos los usuarios
    public function insertarPublicacion()
    {
        $this->oPublicacion->setContenido($_POST['sContenido']);
        $aResultado = $this->oPublicacion->insertarPublicacion();
        return $aResultado;
    }

    //listar todas las publicaciones
    public function listarPublicacion(){
        $aResultado = $this->oPublicacion->listarPublicacion();
        $rowResul = mysqli_num_rows($aResultado);
        if($rowResul > 0){
            while ($rows = $aResultado->fetch_assoc()) {
                $aResul[] = $rows;
            }
            return $aResul;
        }else{
            return false;
        }
       
    }

    //eliminar publicacion por IDPublicacion
    public function eliminarPublicacion(){
        $this->oPublicacion->setIdPublicacion($_POST['nIdPublicacion']);
        $aResultado = $this->oPublicacion->eliminarPublicacion();
        return $aResultado;
    }

    //traer publicacion por IDPublicacion
    public function traerPublicacionPorId(){
        $this->oPublicacion->setIdPublicacion($_POST['nIdPublicacion']);
        $aResultado = $this->oPublicacion->traerPublicacionPorId();
        while ($rows = $aResultado->fetch_assoc()) {
            $aResul[] = $rows;
        }
        return $aResul;
    }

    //Actualizar Publicacion
    public function actualizarPublicacion(){
        $this->oPublicacion->setIdPublicacion($_POST['nIdPublicacion']);
        $this->oPublicacion->setContenido($_POST['sContenido']);
        $this->oPublicacion->setFecha($_POST['dFecha']);
        $aResultado = $this->oPublicacion->actualizarPublicacion();
        return $aResultado;
    }

}
