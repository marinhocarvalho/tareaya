
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

            <ul class="nav nav-pills">
                <li><a href="inicio.php" ><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li  class="active"><a href="#"><span class="glyphicon glyphicon-inbox"></span> Listas</a></li>
            </ul>
            
            
            
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Listar Usuarios</h2>
                    <p><a href="listarUsuarios.php" class="btn btn-success">Listar Usuarios »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Listar Estudiantes</h2>
                    <p><a href="listarEstudiante.php" class="btn btn-success">Listar Estudiantes »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Listar Docentes</h2>
                    <p><a href="listarDocente.php" class="btn btn-success">Listar Docentes »</a></p>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Listar Carreras</h2>
                    <p><a href="listarCarrera.php" class="btn btn-success">Listar Carreras »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Listar Materias</h2>
                    <p><a href="listarMateria.php" class="btn btn-success">Listar Materias »</a></p>
                </div>
                
            </div>

        </div>

        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
    </body>
</html>
