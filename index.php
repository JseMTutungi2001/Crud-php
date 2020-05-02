<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Iniciar Sesion</title>
    <style>
        .error{
            border: solid 2px #ff0000;
        }
    </style>
</head>
<body>
    


<header class="container">
        <h1 class="title">
            AlabakdaÓscar.com
        </h1>

    </header>



    <div class="container border border-secondary" id="log-in-form">

    <h2 class=" d-flex justify-content-center"> Iniciar Sesion</h2>

    <form action="login.php" method="POST"  name="formulario" id="formulario" class="form-registro" onsubmit="return validar_login();" >

<div class="form-group ">
                <input type="text" class="form-control d-flex justify-content-center" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu usuario" class="mt-2" minlength="3" maxlength="30" pattern="[A-Za-z ]{3,30}" title="No se permiten caracteres especiales ni que tenga menos de 3 o mas de 30 letras">
            </div>
            <div class="form-group ">
                <input type="password" class="form-control d-flex justify-content-center" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" minlength="8" maxlength="20" pattern="{8,20}" title="no se permiten  menos de 8 o mas de 20 caracteres">
            </div>
          
          <p class="mensaje_error">
          </p>
            <div class="form-group form-group-btn d-flex justify-content-center" required>
                <button type="submit" class="btn btn-success btn-lg">ingresar</button>
            </div>

            <a href="registro.php" class=" d-flex justify-content-center">Registrar Usuario</a>


    </div>
<script src="index.js"> </script>
    <script src="jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



</body>
</html>



<?php
