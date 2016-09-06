<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Infoteca</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="well">
                    <h1 class="text-center">Panel de Control</h1>
                </div>

            </div>
            
            <ul class="nav nav-pills center-block">
                <li class="active"><a href="#" ><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a href="listas.php"><span class="glyphicon glyphicon-inbox"></span> Listas</a></li>
            </ul>

             <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="alert alert-success">
                                <strong>Se ha registrado Correctamente</strong><p>Puede seguir registrando</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Salir</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            

            <div id="musuario" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Crear Usuario</h3>
                        </div>
                        <div class="modal-body">

                            <form action="procesos/registrarUsuario.php" method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>Nombre:</h4>
                                        <input type="text" class="form-control" name="nombre">
                                        <h4>Usuario:</h4>
                                        <input type="text" class="form-control" name="usuario">
                                        <h4>Contraseña:</h4>
                                        <input type="text" class="form-control" name="password">

                                        <br>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="mdocente" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Crear Docente</h3>
                        </div>
                        <div class="modal-body">

                            <form action="procesos/registrarDocente.php" method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>Nombre:</h4>
                                        <input type="text" class="form-control" name="nombre">
                                        <h4>Usuario:</h4>
                                        <input type="text" class="form-control" name="usuario">
                                        <h4>Contraseña:</h4>
                                        <input type="text" class="form-control" name="password">

                                        <br>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="mestudiante" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Crear Estudiante</h3>
                        </div>
                        <div class="modal-body">

                            <form action="procesos/registrarEstudiante.php" method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>Nombre:</h4>
                                        <input type="text" class="form-control" name="nombre">
                                        <h4>Apellido:</h4>
                                        <input type="text" class="form-control" name="apellido">
                                        <h4>Codigo:</h4>
                                        <input type="text" class="form-control" name="codigo">
                                        <h4>Fecha Naciemiento:</h4>
                                        <input type="text" class="form-control" placeholder="año - mes - dia" name="fecha">

                                        <br>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

           <div id="mcarrera" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Crear Carrera</h3>
                        </div>
                        <div class="modal-body">

                            <form action="procesos/registrarCarrera.php" method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>Nombre:</h4>
                                        <input type="text" class="form-control" name="nombre">
                                        <h4>Sigla:</h4>
                                        <input type="text" class="form-control" name="sigla">

                                        <br>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>   
            
            
               <div id="mmateria" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Crear Materia</h3>
                        </div>
                        <div class="modal-body">

                            <form action="procesos/registrarMateria.php" method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>Nombre:</h4>
                                        <input type="text" class="form-control" name="nombre">
                                        <h4>Sigla:</h4>
                                        <input type="text" class="form-control" name="sigla">
                                        <h4>Credito:</h4>
                                        <input type="text" class="form-control" name="credito">
                                        <br>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>  
            
            
            
            
            
            
            
            
            
            
            
            

    <div class="row">
         <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Usuario</h2>
                    <p>En esta opcion podemos registrar usuarios que tendran acceso al sistema</p>
                    <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#musuario">Registrar ahora un Usuario »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Estudiante</h2>
                    <p>Los Alumnos no tiene acceso al sistema Pero es necesario registrar cada alumno.</p>
                    <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#mestudiante">Registrar ahora un Estudiante »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Docente</h2>
                    <p>El plantel docente es capaz de poder ingresar al sistema y colocar notas correspondiente a su materia.</p>
                    <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#mdocente">Registrar ahora un Docente»</a></p>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Carrera</h2>
                    <p>De forma rapida usted puede registrar las carreras.</p>
                    <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#mcarrera">Registrar ahora una Carrera »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Materia</h2>
                    <p>Las materias tienen que ser colocadas correspondientes a su carrera es posible colocar una para varias carreras.</p>
                    <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#mmateria">Registrar ahora una Materia »</a></p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <h2>Registrar Horario</h2>
                    <p>los horarios son exclusivos en la mañana, solo por fuerza mayor se cambiara en otro horario.</p>
                    <p><a href="#" class="btn btn-success">Registrar ahora un Horario »</a></p>
                </div>
            </div>
        </div>

        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
        <script>
             $(document).ready(function (){
                $("#myModal").modal('show');
                $("#myModal").css("display", "block");  
                
            });
        </script>

    </body>
</html>