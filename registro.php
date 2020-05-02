<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Registrar Usuario</title>
</head>
<body>
<header class="container">
        <h1 class="title">
            AlabakdaÓscar.com
        </h1>

    </header>
    
<div class="container border border-secondary col-md-8" id="log-in-form">
<form action="agregar_usuario.php" method="POST" name="formulario" id="formulario" class="form-registro" onsubmit="return validar_registro();">

<div class="form-group">
<h2 class="d-flex justify-content-center"> Registrate</h2>
                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu usuario" maxlength="30" pattern="[A-Za-z ]{3,30}" title="No se permite registrar nuevamente un mismo usuario, tampoco se aceptan caracteres especiales ni que tenga menos de 3 o mas de 30 letras" >
            </div>
            <div class="form-group ">
                <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Ingresa tu contraseña" minlength="8" maxlength="20" pattern="{8,20}" title="no se permiten  menos de 8 o mas de 20 letras" >
            </div>
            <div class="form-group " required>
                <input type="password" id="contrasena2" class="form-control" name="contrasena2" placeholder="Repite tu contraseña" minlength="8" maxlength="20" pattern="{8,20}" title="no se permiten  menos de 8 o mas de 20 letras" >
            </div>

            <div class="clearfix"></div>
            <div class="checkbox">
                <label>  <input type="checkbox">Recuerdame</label>
               
                
            </div>


            <div class="form-group form-group-btn">
                <button type="submit" class="btn btn-success btn-lg">Registrar</button>
            </div>
            <div class="form-group form-group-btn">
            <a href="index.php" class=" d-flex justify-content-center">  Iniciar Sesion </a>
            </div>
</form>
</div>

<script src="validar_registro.js"> </script>
<script src="jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




</body>
</html>
