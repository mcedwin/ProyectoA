<?php

$id = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'proyectoa');
if ($db->connect_errno) {
    die("Error al conectar : " . $db->connect_error);
}

$sql = "SELECT * FROM persona WHERE id='{$id}'";
$result = $db->query($sql);
if (!$result) {
    die("Error al consultar: " . $db->error);
}

if ($result->num_rows == 0) {
    echo "No hay registros";
} else {

    $reg = $result->fetch_assoc();
?>
    <form action="evaleditar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $reg['id']; ?>">
        <p>
            <label>Nombres</label>
            <input type="text" name="nombres" value="<?php echo $reg['nombres']; ?>">
        </p>
        <p>
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $reg['apellidos']; ?>">
        </p>
        <p>
            <label>Edad</label>
            <input type="text" name="edad" value="<?php echo $reg['edad']; ?>">
        </p>
        <input type="submit">
    </form>

<?php
}
?>