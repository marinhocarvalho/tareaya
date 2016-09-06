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
                        <h1 class="text-center">Ingreso</h1>
                    </div>
                
            </div>
            <div class="row">

                <form action="procesos/validarLogin.php" method="post">
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <label for="inputEmail">Usuario</label>
                                <input type="text" class="form-control" name="login"  placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <label for="inputEmail">Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox">Recuerdame</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </div>                     
                    </div>

                </form>


            </div>
        </div>
        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
    </body>
</html>