<?php

require_once 'Conexion/conexion.php';

class Publicacion extends conexion{

    public function __construct(){
        parent::__construct();
    }

    private $nIdPublicacion;
    private $sContenido;
    private $dFecha;

    //insertar una Publicacion
    public function insertarPublicacion(){
        $sContenido = $this->getContenido();
        $sql = "INSERT INTO Publicacion(sContenido,dFecha) VALUES ('$sContenido',NOW())";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
    }

    // listar todas las publicaciones
    public function listarPublicacion(){
        $sql = "SELECT * FROM Publicacion order by dFecha DESC";
        $aResultado = $this->conn->query($sql);
        return $aResultado; 
    }

    //eliminar publicacion
    public function eliminarPublicacion(){
        $nIdPublicacion = $this->getIdPublicacion();
        $sql = "DELETE FROM Publicacion WHERE nIdPublicacion = $nIdPublicacion";
        $aResultado = $this->conn->query($sql);
        return $aResultado; 
    }

    //traer publicacion por ID
    public function traerPublicacionPorId(){
        $nIdPublicacion = $this->getIdPublicacion();
        $sql = "SELECT * FROM Publicacion WHERE nIdPublicacion = $nIdPublicacion";
        $aResultado = $this->conn->query($sql);
        return $aResultado; 
    }

    //actualizar publicacion
    public function actualizarPublicacion(){
        $nIdPublicacion = $this->getIdPublicacion();
        $sContenido = $this->getContenido();
        $dFecha = $this->getFecha();
        $sql = "UPDATE  Publicacion SET sContenido = '$sContenido', dFecha = '$dFecha' WHERE nIdPublicacion = $nIdPublicacion";
        $aResultado = $this->conn->query($sql);
        return $aResultado; 
    }






    public function getIdPublicacion() {
        return $this->nIdPublicacion;
    }
    public function setIdPublicacion($nIdPublicacion) {
        $this->nIdPublicacion = $nIdPublicacion;
    }

    public function getContenido() {
        return $this->sContenido;
    }
    public function setContenido($sContenido) {
        $this->sContenido = $sContenido;
    }

    public function getFecha() {
        return $this->dFecha;
    }
    public function setFecha($dFecha) {
        $this->dFecha = $dFecha;
    }





}



?>