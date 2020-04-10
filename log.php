<?php

include 'conexion.php';

$usuario= $_POST["usuario"];
$clave= $_POST["clave"];

$ingresar= "SELECT * FROM Usuarios WHERE Usuario='$usuario'  and Contra='$clave' ";
$resultado= mysqli_query($conexion, $ingresar);

$filas= mysqli_num_rows($resultado);

if($filas > 0){
    header("location:index.html
    ");
   
}else{
    echo '<script>
alert("Usuario o Contraseña No existen")
window.history.go(-1)
</script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);