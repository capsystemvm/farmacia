<!DOCTYPE html>
<html lang="en" >
<head>
    <title>Inicio de Sesión</title>

    
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>

<body>

           <!-- Inicio Alertas-->
<?php 
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='error'){
            ?>
            <div>
            <!-- Bootstrap CSS v5.2.1 -->
                
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
              
                <strong>Error!</strong> Usuario no Válido, vuelva a intentarlo.
               
            </div>
            
            <?php 
                }
            ?>
                        <!-- Fin Alertas-->
            </div>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/avatarlogin.png" />
                </div>
                
                <form class="col-12" action="inicio.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="login" name="login"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" id="pass" name="pass"/>
                    </div>
                    <button id="boton" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
