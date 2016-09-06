<?php

require_once '../datos/datosDocente.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$nombre= $_POST['nombre'];
$login = $_POST['usuario'];
$password = $_POST['password'];
echo $nombre.'<br>';
echo $login.'<br>';
echo $password.'<br>';
if ($login != NULL && $password != NULL &&$nombre!=NULL) {
    $dd = new datosDocente();
    $dd->setLogin($login);
    $dd->setPassword($password);
    $dd->setNombre($nombre);
    $dd->setEstado($estado);
    $resultado = $dd->registrarUsuario();
    header('Location: ../inicioRC.php');
}else{
    header('Location: ../inicio.php');
}