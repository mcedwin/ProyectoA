<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista alumnos</title>
    <link rel="stylesheet" href="bootstrap-411/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="crear.php">Crear</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="detalles.php">Detalles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="reportes.php">Reportes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link disabled" href="configuraciones.php" tabindex="-1" aria-disabled="true">Configuraciones</a>
        </li>
        </ul>
    </div>
    </nav>


<?php
$db = new mysqli('localhost','root','','proyectoa');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];

$result = $db->query("UPDATE persona SET nombres='{$nombres}',apellidos='{$apellidos}',edad='{$edad}',dni='{$dni}',correo='{$correo}' WHERE id='{$id}'");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:index.php");

?>

</BOdy>
</HTml>
