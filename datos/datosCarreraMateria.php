<?php

include 'DConexion.php';

Class datosCarreraMateria {

    private $con;
    private $sigla;
    private $credito;
    private $nombre;
    public function __construct() {
        $this->con = new DConexion();
    }

    public function verificarUsuario() {
        $sql = "select idUsuario from usuario where usuario='$this->login' and clave='$this->password'";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }

    public function setSiga($sigla) {
        $this->sigla = $sigla;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setCredito($credito) {
        $this->credito = $credito;
    }
    public function registrarCarrera(){
        $sql = "insert into carrera values(null,'$this->nombre','$this->sigla')";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
        
    }
     public function registrarMateria(){
        $sql = "insert into materia values(null,'$this->nombre','$this->sigla',$this->credito)";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
        
    }
  
    public function unoC(){
        $sql = " select * from carrera";
        
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }
    public function unoM(){
        $sql = " select * from materia";
        
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }
    
    

}
