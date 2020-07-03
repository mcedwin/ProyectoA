
<?php
    include("menu.php");
?>
<!--<form action="eval.php" method="post">
    <p>
        <label>Nombres</label>
        <input type="text" name="nombres">
    </p>
    <p>
        <label>Apellidos</label>
        <input type="text" name="apellidos">
    </p>
    <p>
        <label>Edad</label>
        <input type="text" name="edad">
    </p>
    <p>
        <label>DNI</label>
        <input type="text" name="dni">
    </p>
    <p>
        <label>Correo</label>
        <input type="text" name="correo">
    </p>
    <input type="submit">
</form>
-->


<form action="eval.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">NOMBRES</label>
    <input type="nombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">APELLIDOS</label>
    <input type="apellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Edad</label>
    <input type="edad" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DNI</label>
    <input type="dni" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>