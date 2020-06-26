<?php
$db = new mysqli('localhost','root','','proyectoa');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}

$id = $_GET['id'];

$result = $db->query("DELETE FROM persona WHERE id='{$id}'");
if(!$result){
    die("Error al consultar: ".$db->error);
}

//echo "Registro borrado ".$id;

header("location:index.php");

?>