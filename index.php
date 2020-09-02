<?php
include "_header.php";
$nombre = 'Administrador';
$apellido = 'General';
?>

<h1> Página principal </h1>
<br>
<h3>Bienvenido al Sistema CRM</h3>
<br>

<dl class="row">
  <dt class="col-sm-3">Avatar</dt>
  <dd class="col-sm-9"> <img src="img/avatar.jpg" alt="..." class="img-thumbnail" style="width: 250px; height: 230px;"> </dd>
  
  <dt class="col-sm-3">Usuario</dt>
  <dd class="col-sm-9"> <?= $nombre . ' ' . $apellido ?> </dd>
  
  <dt class="col-sm-3">Contraseña</dt>
  <dd class="col-sm-9"> <a href="password-cambiar.php" class="btn btn-primary">Editar Contraseña</a> </dd>

  <dt class="col-sm-3">Correo</dt>
  <dd class="col-sm-9">administrador@correo.com</dd>
  
  <dt class="col-sm-3">Telefono</dt>
  <dd class="col-sm-9">11-2525-2233</dd>
</dl>



<?php
include "_footer.php";
