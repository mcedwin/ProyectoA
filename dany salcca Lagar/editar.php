<?php
$id=$_GET['id'];
     $db = new mysqli('localhost','root','','proyecto');
     if($db->connect_errno)
     {
         die("Error al conectar : ".$db->connect_error);
     }
 
    $sql = "SELECT * FROM persona WHERE id='{$id}'";
     $result = $db->query($sql);
     if(!$result){
         die("Error al consultar: ".$db->error);
     }
 
     if($result->num_rows==0){
         echo "No hay registros";
     }else{
        
         $reg = $result->fetch_assoc();
?>

<form action="evaleditar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $reg['id'];?>">
    <label for="nombres">nombres</label>
         <input type="text" name="nombres" value="<?php echo $reg['nombres'];?>">
    <br><br>

    <label for="apellidos">apellidos</label>
         <input type="text" name="apellidos" value="<?php echo $reg['apellidos'];?>">
         <br><br>
   <label for="edad">edad</label>
    <input type="text" name="edad" value="<?php echo $reg['edad'];?>">
    <br><br>

    <label for="email">email</label>
    <input type="text" name="email" value="<?php echo $reg['email'];?>">
    <br><br>
     
    <label for="direccion">direccion</label>
    <input type="text" name="direccion" value="<?php echo $reg['direccion'];?>">
    <br><br>

    

   <label for="submit">submit</label>
        <input type="submit">
  
   
</form>

<?php
     }
?>