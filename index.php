
<?php
    include("menu.php");
?>

<?php
    $db = new mysqli('localhost','root','','proyectoa');
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

        echo "<table class='table'>";
        echo "<thead class='thead-dark'>";
        echo  "<tr>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>NOMBRES</th>";
        echo "<th scope='col'>APELLIDOS</th>";
        echo "<th scope='col'>DNI</th>";
        echo "<th scope='col'>CORREO</th>";
        echo "<th scope='col'>OPCION</th>";
        echo "<th scope='col'>OPCION</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while($reg = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$reg['id']."</td>";
        echo "<td>".$reg['nombres']."</td>";
        echo "<td>".$reg['apellidos']."</td>";
        echo "<td>".$reg['edad']."</td>";
        echo "<td>".$reg['dni']."</td>";
        echo "<td>".$reg['correo']."</td>";
        echo "<td><a href='eliminar.php?id=".$reg['id']."'>Eliminar</a></td>";
        echo "<td><a href='editar.php?id=".$reg['id']."'>Editar</a></td>";
        echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

    }

       /* echo "<table border=1>";
        echo "<tr>";
        echo "<th>ID</th><th>NOMBRES</th><th>APELLIDOS</th><th>EDAD</th><th>DNI</th><th>CORREO</th><th colspan='2'>OPCIONES</th>";
        echo "</tr>";
        while($reg = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$reg['id']."</td>";
            echo "<td>".$reg['nombres']."</td>";
            echo "<td>".$reg['apellidos']."</td>";
            echo "<td>".$reg['edad']."</td>";
            echo "<td>".$reg['dni']."</td>";
            echo "<td>".$reg['correo']."</td>";
            echo "<td><a href='eliminar.php?id=".$reg['id']."'>Eliminar</a></td>";
            echo "<td><a href='editar.php?id=".$reg['id']."'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }*/

?>




</body>
</html>