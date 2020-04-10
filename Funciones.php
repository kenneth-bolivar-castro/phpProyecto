<?php

class clase
{




    //     function insertarproduc(){
    //         $nombre_p = $_POST['nombre'];
    //         $cantidad_p = $_POST['cantidad'];
    //         $precio_p = $_POST['precio'];
    //         $descripcion_p = $_POST ['descrip'];
    //         $tip = $_POST['tip'];
    //         $arch = $_FILES['attached']['name'];
    //         $uploaded = _DIR_ . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . $_FILES['attached']['name'];

    //         if(move_uploaded_file($_FILES['attached']['tmp_name'],$uploaded)){
    //          echo "File attached properly.\n";
    //         }else{
    //             echo "Something went wrong!\n";
    //             }

    //         //$imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    //         $this->cone();

    //         $sql = "INSERT INTO c_php.productos (nombre,cantidad,precio,estado,foto,descripcion) VALUES ('$nombre_p','$cantidad_p','$precio_p','$tip','fotos/$arch','$descripcion_p')";
    //         $result = $this->connection->query($sql);

    //             if($result){
    //                 echo "<script type='text/javascript'>alert('Producto Registrado');</script>";
    //                // echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
    //             }else{
    //                 echo "<script type='text/javascript'>alert('Hubo un error');</script>";

    //             }
    // }



    function eliminar()
    {
        include 'conexion.php';
        $s = $_POST["digite"];


        $delete = mysqli_query($conexion, "DELETE  FROM Usuarios Where Usuario = '$s'");
        mysqli_query($conexion, $delete);

    }

    function actualizar()
    {
        include 'conexion.php';
        $soria = $_POST["digite"];
        $nombre = $_POST["nombr"];
        $apellidos = $_POST["ape"];
        $correo = $_POST["correo"];
        $usuario = $_POST["Usu"];
        $clave = $_POST["contra"];
        $telefono = $_POST["tele"];
        $tipo = $_POST["tipo"];
        
        $q="UPDATE Usuarios set Nombre='$nombre',Apellidos='$apellidos',Correo='$correo',Usuario='$usuario',Contra='$clave',Telefono='$telefono',TipoUsuario='$tipo' where Usuario='$soria'";
        if(mysqli_query($conexion,$q)){
            echo '<script>
            alert("Actualizado")
            window.history.go(-1)
            </script>';
    }
        else{
            echo '<script>
            alert("Error")
            window.history.go(-1)
            </script>';
    }
       

    }
   
}
