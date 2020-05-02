<?php
session_start();
include_once 'conexion.php';


$login = $usuario_login;

$_SESSION['admin']=$usuario_login;
if(isset($_SESSION['admin'])){
header('Location:pagina.php');
}





$usuario_login= $_POST['nombre_usuario'];
$contrasena_login= $_POST['contrasena'];

//muestra los datos ingresados
/* var_dump($usuario_login);
var_dump($contrasena_login);

 */
//verificar si usuario existe
$sql = 'SELECT * FROM usuarios WHERE nombre=? ';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

// muestra si el verificado es verdadero o falso
/* echo '</br>';
var_dump($resultado);
echo '</br>'; */

if(!$resultado){

//matar operacion
/* echo '</br>el usuario no existe </brZ'; */


}

/* echo '</br>usuario verificado</br>'; */

/* echo '</br>';
var_dump($resultado['contrasena']);
echo '</br>'; */

if(password_verify($contrasena_login, $resultado['contrasena'])){
/* echo 'las contraseñas son iguales'; */
$_SESSION['admin']=$usuario_login;
header('location:pagina.php');





}else{
/*     echo 'la contraseña es incorrecta'; */
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Ingresar</title>
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

<p>
    
        <ul>

<li>
El usuario no existe.
</li>
<br>
<li>
Las contraseñas es incorrecta.
</li>


<p>
    Por favor regresa e intentalo de nuevo.
</p>


        </ul>

</p>


<a href="index.php"> <button type="button" class="btn btn-primary"> Regresar </button></a>
</div>

</div>




</div>

<script src="jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
die();
?>