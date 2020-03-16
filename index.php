<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
 <title> REGISTRO</title>
 <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
<h1>REGISTRO<h1>
<form action="registrar.php" method="post" class="form-register">
<h2 class="form_titulo">CREA TU CUENTA</h2>
<div class="contenedor-inputs">
<input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
<input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required>
<input type="email" name="correo" placeholder="Correo" class="input-100" required>
<input type="text" name="usuario" placeholder="Usuario" class="input-48" required>
<input type="password" name="clave" placeholder="Contraseña" class="input-48" required>
<input type="text" name="telefono" placeholder="Telefono" class="input-100">
<input type="submit" value="Registrar" class="btn-enviar">

<p class="form_link">¿Ya tienes cuenta?<a href="">Ingresa aqui</a></p>
</div>
</form>
</body>



</body>







</html>