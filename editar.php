<?php
/* echo 'editar.php?id=1&nombre=elias&ci=25785295&peso=70&correo=elias123@gmail.com';
echo'</br>'; */

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$ci = $_GET['ci'];
$peso = $_GET['peso'];
$correo = $_GET['correo'];

/* echo'</br>';
echo $id;
echo'</br>';
echo $nombre;
echo'</br>';
echo $ci;
echo'</br>';
echo $correo; */




include_once 'conexion.php';

$sql_editar = 'UPDATE informacion SET nombre=?, ci=?, peso=?, correo=? WHERE id=? ';

$sentencia_editar= $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre,$ci,$peso,$correo,$id));


//Cerrar conexion base de datos y sentencia
$sentencia_agregar = null;
$pdo = null;
header('location:pagina.php');