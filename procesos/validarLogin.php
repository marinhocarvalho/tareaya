<?php

require_once '../datos/datosUsuario.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$login = $_POST['login'];
$password = $_POST['password'];

if ($login != NULL && $password != NULL) {
    $du = new datosUsuario();
    $du->setLogin($login);
    $du->setPassword($password);
    $resultado = $du->verificarUsuario();
     header('Location: ../inicio.php');
}else{
    header('Location: ../index.php');
}

















