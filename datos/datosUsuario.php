<?php

include 'DConexion.php';

Class datosUsuario {

    private $con;
    private $login;
    private $password;
    private $nombre;
    private $estado;
    public function __construct() {
        $this->con = new DConexion();
    }

    public function verificarUsuario() {
        $sql = "select idUsuario from usuario where usuario='$this->login' and clave='$this->password'";
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
        $sql = "insert into usuario values(null,'$this->nombre','$this->login','$this->password','A')";
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
        
    }
    public function mostrarEmpresasProyecto() {
        $sql = "  select e.NOMBRE_EMPRESA, e.TELEFONO, e.DIRECCION, tp.NOMBRE AS NOMBRE_PROYECTO, tp.FECHA_INICIO, tp.FECHA_FIN
from empresa e, tipo_proyecto tp
where e.ID_EMPRESA = tp.ID_EMPRESA";
        $this->con->conectar();
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }
    public function uno(){
        $sql = " select * from usuario";
        
        $resultado = $this->con->consulta($sql);
        $this->con->desconectar();
        return $resultado;
    }
    

}
