
<?php session_start();

include_once '../Models/Usuarios.php';




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ousuariosController = new usuariosControllers();

    $sFuncion = $_POST['function'];

    switch ($sFuncion) {
        case 'loguearUsuario':
            echo json_encode($ousuariosController->loginUsuario());
            break;

        default:
            # code...
            break;
    }
}
class usuariosControllers{
    private $oUsuario;

    public function __construct()
    {
        $this->oUsuario = new Usuarios;
    }


    public function loginUsuario(){    
        $resultado = '';
       
        $this->oUsuario->setUsuario($_POST['sUsuario']);
        $this->oUsuario->setPassword($_POST['sPassword']);
        $aResultado = $this->oUsuario->login();
        $rowResul = mysqli_num_rows($aResultado);
        if($rowResul != 1){
            $resultado = false;
        }else{
            while ($rows = $aResultado->fetch_assoc()) {
                $aResul[] = $rows;
            }
            $resultado = $aResul;
            $_SESSION['usuario'] = $_POST['sUsuario'];
        }

        return $resultado;
    }
}



?>