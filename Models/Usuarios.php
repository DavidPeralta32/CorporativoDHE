
<?php

require_once 'Conexion/conexion.php';

class Usuarios extends conexion{

    public function __construct(){
        parent::__construct();
    }

    private $nIdUsuario;
    private $sNombre;
    private $sApellido;
    private $sUsuario;
    private $sPassword;


    public function login(){
        $sUsuario = $this->getUsuario();
        $sPassword = $this->getPassword();
        $sql = "SELECT * FROM Usuarios WHERE sUsuario = '$sUsuario' and sPassword = '$sPassword'";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
    }



    public function getIdUsuario() {
        return $this->nIdUsuario;
    }
    public function setIdUsuario($nIdUsuario) {
        $this->nIdUsuario = $nIdUsuario;
    }

    public function getNombre() {
        return $this->sNombre;
    }
    public function setNombre($sNombre) {
        $this->sNombre = $sNombre;
    }

    public function getApellido() {
        return $this->sApellido;
    }
    public function setApellido($sApellido) {
        $this->sApellido = $sApellido;
    }

    public function getUsuario() {
        return $this->sUsuario;
    }
    public function setUsuario($sUsuario) {
        $this->sUsuario = $sUsuario;
    }

    public function getPassword() {
        return $this->sPassword;
    }
    public function setPassword($sPassword) {
        $this->sPassword = $sPassword;
    }

    

}


?>