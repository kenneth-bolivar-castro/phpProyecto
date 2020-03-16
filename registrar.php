<?php
include 'conexion.php';

$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$correo= $_POST["correo"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];
$telefono= $_POST["telefono"];

$verificar_usuario= mysqli_query($conexion, "SELECT * FROM Usuarios Where Usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0 ){
echo '<script>
alert("El usuario ya esta registrado")
window.history.go(-1)
</script>';
exit;    
}


$insertar = "INSERT INTO Usuarios(Nombre, Apellidos, Correo, Usuario, Contra, Telefono) VALUES('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";
$result = mysqli_query($conexion,$insertar);
if(!$result){
    '<script>
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
