<?php
require_once './datos/datosCarreraMateria.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="well">
                    <h1 class="text-center">Panel de Control</h1>
                </div>

            </div>
            <div class="row">
                
            </div>

            <div class="row">
                <ul class="nav nav-pills">
                    <li><a href="inicio.php" ><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                    <li  class="active"><a href="listas.php"><span class="glyphicon glyphicon-inbox"></span> Listas</a></li>
                </ul>
            </div>

            <div class="row">
                <h2></h2>
                <legend>Lista de Materias</legend>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Nº</th>
                        <th>Nombre</th>
                        <th>Sigla</th>
                        <th>Credito</th>
                    </tr>
                    <?php
                    $du = new datosCarreraMateria();
                    $mostrar = $du->unoM();

                    while ($list = mysql_fetch_row($mostrar)) {
                        $i = 0;
                        echo '<tr>';
                        while ($i < count($list)) {
                            echo '<td>' . $list[$i] . '</td>';
                            $i++;
                        }
                        echo '</tr>';
                    }
                    ?>
                </table>

            </div>
        </div>      


        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
    </body>
</html>
