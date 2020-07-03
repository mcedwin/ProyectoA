<?php
$db = new mysqli('localhost','root','','proyecto');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];


$result = $db->query("INSERT INTO 
    persona(nombres,apellidos,edad,email,direccion) 
    VALUES('{$nombres}','{$apellidos}','{$edad}','{$email}','{$direccion}')");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:index.php");

?>