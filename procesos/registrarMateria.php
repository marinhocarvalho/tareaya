<?php

require_once '../datos/datosCarreraMateria.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nombre= $_POST['nombre'];
$sigla = $_POST['sigla'];

$credito = $_POST['credito'];
if ($sigla!= NULL &&$nombre!=NULL && $credito!=NULL) {
    $dcm = new datosCarreraMateria();
    $dcm->setSiga($sigla);
    $dcm->setNombre($nombre);
    $dcm->setCredito($credito);   
    $resultado = $dcm->registrarMateria();
    header('Location: ../inicioRC.php');
}else{
    header('Location: ../inicio.php');
}