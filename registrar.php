<?php
include 'conexion.php';

$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$correo= $_POST["correo"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];
$telefono= $_POST["telefono"];
$tipo= $_POST["select"];


$verificar_usuario= mysqli_query($conexion, "SELECT * FROM Usuarios Where Usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0 ){
echo '<script>
alert("El usuario ya esta registrado")
window.history.go(-1)
</script>';
exit;    
}


$insertar = "INSERT INTO Usuarios(Nombre, Apellidos, Correo, Usuario, Contra, Telefono,TipoUsuario) VALUES('$nombre','$apellidos','$correo','$usuario','$clave','$telefono', '$tipo')";
$result = mysqli_query($conexion,$insertar);
if(!$result){
    echo '<script>
    alert("Error al registrarse")
    window.history.go(-1)
    </script>';
}else{
    echo '<script>
    alert("Usuario Registrado Exitosamente")
    window.history.go(-1)
    </script>';
}

mysqli_close($conexion);
