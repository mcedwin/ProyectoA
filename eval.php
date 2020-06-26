<?php
$db = new mysqli('localhost','root','','proyectoa');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

$result = $db->query("INSERT INTO 
    persona(nombres,apellidos,edad)
    VALUES('{$nombres}','{$apellidos}','{$edad}')");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:index.php");

?>