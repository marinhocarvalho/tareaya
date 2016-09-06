<?php

require_once '../datos/datosCarreraMateria.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nombre= $_POST['nombre'];
$sigla = $_POST['sigla'];
if ($sigla!= NULL &&$nombre!=NULL) {
    $dcm = new datosCarreraMateria();
    $dcm->setSiga($sigla);
    $dcm->setNombre($nombre);
    
    $resultado = $dcm->registrarCarrera();
    header('Location: ../inicioRC.php');
}else{
    header('Location: ../inicio.php');
}