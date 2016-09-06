<?php

require_once '../datos/datosEstudiante.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nombre= $_POST['nombre'];
$apellido = $_POST['apellido'];
$codigo = $_POST['codigo'];
$fecha = $_POST['fecha'];
if ($nombre != NULL && $apellido!= NULL &&$codigo!=NULL && $fecha) {
    $de = new datosEstudiante();
    $de->setApellido($apellido);
    $de->setCodigo($codigo);
    $de->setFecha($fecha);
    $de->setNombre($nombre);
    $de->registrarEstudiante();
    
    header('Location: ../inicioRC.php');
}else{
    header('Location: ../inicio.php');
}