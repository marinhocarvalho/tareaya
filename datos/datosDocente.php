<?php

include 'DConexion.php';

Class datosDocente {

    private $con;
    private $login;
    private $password;
    private $nombre;
    private $estado;
    public function __construct() {
        $this->con = new DConexion();
    }

    public function verificarUsuario() {
        $sql = "select idUsuario from docente where usuario='$this->login' and clave='$this->password'";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }

    public function setLogin($login) {
        $this->login = $login;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function registrarUsuario(){
        $sql = "insert into docente values(null,'$this->nombre','$this->login','$this->password','A')";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
        
    }
   
    public function uno(){
        $sql = " select * from docente";
        
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }
    

}
