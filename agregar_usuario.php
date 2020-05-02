<?php

include_once 'conexion.php';

/* echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n"; */

//capturar POST
$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT); 

//verificar usuario existes
$sql = 'SELECT * FROM usuarios WHERE nombre=? ';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

if($resultado){
/* echo  " El Usuario ya esta registrado "; */

}


if (password_verify($contrasena2, $contrasena)) {
    /* echo '¡La contraseña es válida!'; */

$sql_agregar= 'INSERT INTO usuarios (nombre, contrasena) VALUES (?,?) ';
$sentencia_agregar=$pdo->prepare($sql_agregar);

if($sentencia_agregar->execute(array($usuario_nuevo, $contrasena))){
    /* echo 'Agregado </br>'; */
}else{
  /*   echo ' Las contraseñas no son iguales'; */
}

$sentencia_agregar = null;
$pdo =null;

header('location:index.php');
/* $passInvalida ="La contraseña es Invalida"; */
} else {
   /*  echo 'La contraseña no es válida.'; */
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="agregar_usuario.css">
    <title>Agregar Usuario</title>
</head>
<body>
    


<header class="container">
        <h1 class="title">
            AlabakdaÓscar.com
        </h1>

    </header>

<div class="container border border-secondary col-md-8" id="log-in-form">
<div class="row">
<div class="col-md-8">

<div class="justify-content-center">

<p>
    Ha ocurrido un error
</p>

<p>
   Es posible que haya ocurrido alguno de los siguientes errores: 
</p>
<br>
<p>
    
        <ul>

<li>
El Usuario ya esta registrado.
</li>
<li>
Las contraseñas no son iguales.
</li>
<br>
<li>
La contraseña no es válida.
</li>

<p>
    Por favor regresa e intentalo de nuevo.
</p>


        </ul>

</p>


<a href="registro.php"> <button type="button" class="btn btn-primary"> Regresar </button></a>
</div>

</div>




</div>

<script src="jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>