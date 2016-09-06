<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'DConexion.php';

Class datosEstudiante {

    private $con;
    private $apellido;
    private $codigo;
    private $nombre;
    private $fecha;
    public function __construct() {
        $this->con = new DConexion();
    }


    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

        public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function registrarEstudiante(){
        $sql = "insert into estudiante values(null,'$this->nombre','$this->apellido','$this->codigo','$this->fecha')";
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

