<?php
session_start();
// debo anclar este archivo con los de la otra carpeta para que se redigiran aca y comprobar si funcionan bien el registro y login


include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM informacion';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

/* var_dump($resultado); */

/* Agregar */
if($_POST){
    $nombre_A= $_POST['nombre'];
    $ci_A=  $_POST['ci'];
    $peso_A=  $_POST['peso'];
    $correo_A=  $_POST['correo'];

    $sql_agregar= 'INSERT INTO informacion (nombre,ci,peso,correo) VALUES (?,?,?,?)';
    $sentencia_agregar= $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre_A, $ci_A, $peso_A, $correo_A));

//Cerrar sesion
$sentencia_agregar = null;
$pdo = null;

    header('location:pagina.php');
}

if($_GET){
$id = $_GET['id'];

$sql_unico = 'SELECT * FROM informacion WHERE id=?';

$gsent_unico = $pdo->prepare($sql_unico);
$gsent_unico->execute(array($id));

$resultado_unico = $gsent_unico->fetch();

//var_dump($resultado_unico);

}





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar Sesion</title>
    <link rel="stylesheet" type="text/css" href="pagina.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d92cd6538f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
</head>

<body>
    <header class="container">
        <h1 class="title">
            AlabakdaÓscar.com
        </h1>

    </header>
    
    

    <div class="container border border-secondary col-md-10" id="log-in-form">
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-8 d-flex justify-content-center">
<h2> Bienvenido al registro de Actores</h2>
        <?php   /*   $_SESSION['admin']=$login;
if(isset($_SESSION['admin'])){
echo '<h2>Bienvenido</h2>'. $_SESSION['admin'];
}else{
    header('location:pagina.php');
}
 */
?> 
<!-- <h1> Bienvenido: <?php  echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invitado'  ?> </h1>  -->
</div>

<div class="col-md-4 d-flex justify-content-center">


        <a href="cerrar.php">    <button class="btn btn-danger" type="button" >
             Salir
            </button></a>
           
         </div>    
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-8">
                <div>

                <h2 class="text-light">Informaciones Agregadas</h2>
                </div>

            <?php foreach($resultado as $dato): ?>

                <div class=" alert alert-primary text-capitalize" role="alert">
                <?php echo $dato['nombre'] ?> 
                -
                <?php echo $dato['ci'] ?> 
                -
                <?php echo $dato['peso'] ?> 
                -
               <?php echo $dato['correo'] ?> 

               <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">
                <i class="fas fa-trash-alt"></i>
                </a>


        <a href="pagina.php?id=<?php echo $dato['id'] ?>" class="float-right">
          <i class="far fa-edit"></i>
          </a>


                </div>  
                <?php endforeach ?>

            </div>

            <div class="col-md-4">
            <?php if(!$_GET): ?>
                <h2 class="text-light">Agregar Información</h2>
                <form action="" method="POST"  name="formulario_a" id="formulario_a" class="form-registro" onsubmit="return validar_agregar();" >
                    <input type="text" class="form-control mt-1 alert-success" id="nombre" name="nombre" placeholder="Ingresa el nombre" class="mt-2" minlength="3" maxlength="30" pattern="[A-Za-z ]{3,30}" title="No se permiten caracteres especiales ni que tenga menos de 3 o mas de 30 letras" required>
                    <input type="text" class="form-control mt-2 alert-success" name="ci" id="ci" placeholder="Cedula de Identidad" pattern="[0-9]{7,9}" minlength="7" maxlength="9" title=" tu cedula de identidad de contener solo numeros y debe contener maximo 9 caracteres y un minimo de 7" required>
                    <input type="text" class="form-control mt-2 alert-success" name="peso" id="peso" placeholder="Ingresa el Peso" pattern="[0-9.]{1,5}" minlength="4" maxlength="5" title=" tu peso debe contener solo numeros y puntos, debe tener un minimo de 4 y un maximo de 5 digitos" required>
                    <input type="email" class="form-control mt-2 alert-success" name="correo" id="correo" placeholder="Ingresa el correo" minlength="10" maxlength="80"   title="tu correo d debe tener un minimo de 6 y un maximo de 100 digitos" required>
                    <button type="submit" class="btn btn-info mt-3"> Agregar</button>
                </form>

                <?php endif ?>

                <?php if($_GET): ?>
                <h2 class="text-light">Editar Información</h2>
                <form method="GET" action="editar.php" name="formulario_e" id="formulario_e" class="form-registro" onsubmit="return validar_editar();"  >

                    <input type="text" class="form-control mt-1 alert-success" name="nombree" id="nombree" placeholder="Ingresa el nombre" value=" <?php echo $resultado_unico['nombre'] ?> " class="mt-2" minlength="3" maxlength="30" pattern="[A-Za-z ]{3,30}" title="No se permiten caracteres especiales ni que tenga menos de 3 o mas de 30 letras">

                    <input type="text" class="form-control mt-2 alert-success" name="ci" id="ci" placeholder="Cedula de Identidad" value=" <?php echo $resultado_unico['cedula'] ?> " pattern="[0-9]{7,9}" minlength="7" maxlength="9" title=" tu cedula de identidad de contener solo numeros y debe contener maximo 9 caracteres" required>

                    <input type="text" class="form-control mt-2 alert-success" name="peso" id="peso" placeholder="Ingresa el Peso" value=" <?php echo $resultado_unico['peso'] ?> " pattern="[0-9.]{1,5}" minlength="4" maxlength="5" title=" tu peso debe contener solo numeros y puntos, debe tener un minimo de 4 y un maximo de 5 digitos" required>

                    <input type="email" class="form-control mt-2 alert-success" name="correo" id="correo"  placeholder="Ingresa el Correo" value=" <?php echo $resultado_unico['correo'] ?> "  minlength="10" maxlength="80"   title="tu correo d debe tener un minimo de 6 y un maximo de 100 digitos" required>
                    <input type="hidden" name="id"
                    value=" <?php echo $resultado_unico['id'] ?> " >
                    <button class="btn btn-info mt-3" type="submit"> Guardar</button>
                </form>
                <?php endif ?>
            </div>

        </div>
        

    </div>


    </div>
    <script src="pagina.js"></script>
    <script src="jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
 

<?php
//cerramos sesion de base de datos y sentencia
$pdo= null;
$gsent = null;

?>