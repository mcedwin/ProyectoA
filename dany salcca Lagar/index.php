<link rel="stylesheet" href="css/bootstrap.min.css" />

<?php
    include("menu.php");
?>
<h1>Este es el Inicio</h1>
<?php
    $db = new mysqli('localhost','root','','proyecto');
    if($db->connect_errno)
    {
        die("Error al conectar : ".$db->connect_error);
    }

    $sql = "SELECT * FROM persona";
    $result = $db->query($sql);

    if(!$result){
        die("Error al consultar: ".$db->error);
    }

    if($result->num_rows==0){
        echo "No hay registros";
    }else{
        echo "<table border=1 class='table'>";
        echo "<tr class='thead-dark'>";
        echo "<th >ID</th><th>NOMBRES</th><th>APELLIDOS</th><th>EDAD</th><th>Email</th><th>Direccion</th><th  Colspan='2'>OPCIONES</th>";
        echo "</tr>";
        while($reg = $result->fetch_assoc()){
            echo "<tr >";
            echo "<td>".$reg['id']."</td>";
            echo "<td>".$reg['nombres']."</td>";
            echo "<td>".$reg['apellidos']."</td>";
            echo "<td>".$reg['edad']."</td>";
            echo "<td>".$reg['email']."</td>";
            echo "<td>".$reg['direccion']."</td>";
            echo "<td><a href='eliminar.php?id=".$reg['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
            echo "<td><a href='editar.php?id=".$reg['id']."'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>
