
<?php 

$link= 'mysql:host=localhost;dbname=tarea_crudphp';
$usuario='root';


try{

$pdo = new PDO($link,$usuario);

/* echo 'conecteado </br>'; */


} catch (PDOException $e){
print"Error: ". $e->getMessage(). "</br>";
die();
}
