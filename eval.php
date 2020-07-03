<?php
$db = new mysqli('localhost','root','','proyectoa');
if($db->connect_error)
{
    die("Error al conectar : ".$db->connect_error);
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];

$result = $db->query("INSERT INTO 
    persona(nombres,apellidos,edad, dni, correo)
    VALUES('{$nombres}','{$apellidos}','{$edad}','{$dni}','{$correo}')");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:index.php");

?>