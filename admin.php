<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="jquery-3.4.1.js"> </script>
  <title>Administrador</title>



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/est.css">
  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peticion.js"></script>

</head>

<body id="page-top">


  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Bienvenido Administrador</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="images/rubik.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Mantenimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.html">Ver pagina</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login.php">Salir</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Bienvenido
          <span class="text-primary">Administrador</span>
        </h1>
        <div class="subheading mb-5">CubeMaster
          <a href="mailto:name@email.com"></a>
        </div>
        <p class="lead mb-5">En esta pagina podras hacer todos los mantenimientos administrativos, tanto registrar, borrar y modificar usuarios a como podras insertar nuevos productos.</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">
    <link rel="stylesheet" href="css/estilos.css">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5" style="color: white;">Registro</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">

          <form action="registrar.php" method="post" class="form-register" id="reg">
            <h2 class="form_titulo">CREA TU CUENTA</h2>
            <div class="contenedor-inputs">
              <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
              <input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required>
              <input type="email" name="correo" placeholder="Correo" class="input-100" required>
              <input type="text" name="usuario" placeholder="Usuario" class="input-48" required>
              <input type="password" name="clave" placeholder="Contraseña" class="input-48" required>
              <input type="text" name="telefono" placeholder="Telefono" class="input-100">
              <select name="select" class="input-100" required>
                <option value="">Seleccione Tipo USuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Normal">Normal</option>
              </select>
              <input type="submit" value="Registrar" class="btn-enviar">


            </div>
          </form>



        </div>

    </section>

    <hr class="m-0">

    <?php
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
      include 'Funciones.php';
      $form = new clase();

      if (isset($_POST['eliminar'])) {
        $form->eliminar();
      }
      if (isset($_POST['actu'])) {
        $form->actualizar();
      }
    }



    ?>









    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" id="mod">
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
          <h2 class="mb-5" style="color: white;">Mantenimiento</h2>



          <input type="text" name="digite" class="input-48" placeholder="Nombre" required>


          <input name="eliminar" type="submit" value="Eliminar" class="btn-enviar" method="post">
          <input name="actu" type="submit" value="Aceptar" class="btn-enviar" method="post">



          <input type="text" name="nombr" id="nombr" placeholder="Nombre">
          <input type="text" name="ape" id="ape" placeholder="Apellidos">
          <input type="text" name="correo" id="correo" placeholder="Correo">
          <input type="text" name="Usu" id="Usu" placeholder="Usuario">
          <input type="text" name="contra" id="contra" placeholder="Contra">
          <input type="text" name="tele" id="tele" placeholder="Telefono">
          <input type="text" name="tipo" id="tipo" placeholder="Tipo Usuario">








          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correos</th>
                <th scope="col">Usuarios</th>
                <th scope="col">Contraseñas</th>
                <th scope="col">Telefono</th>
                <th scope="col">Tipo Usuario</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'conexion.php';

              $sql = "SELECT * FROM Usuarios";
              $result = mysqli_query($conexion, $sql);
              while ($mostrar = mysqli_fetch_array($result)) {




              ?>
                <tr>

                  <td style="color: white;"><?php echo $mostrar['id'] ?> </td>
                  <td style="color: white;"> <?php echo $mostrar['Nombre'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['Apellidos'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['Correo'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['Usuario'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['Contra'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['Telefono'] ?> </td>
                  <td style="color: white;"><?php echo $mostrar['TipoUsuario'] ?> </td>
                </tr>
              <?php
              }

              ?>
            </tbody>
          </table>


        </div>
      </section>
    </form>
    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5" style="color: white;">Productos</h2>
        <section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		</section>


      </div>

    </section>

    <hr class="m-0">


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

</body>
<script>
  // $("#nombr").hide();
  // $("#ape").hide();
  // $("#correo").hide();
  // $("#Usu").hide();
  // $("#contra").hide();
  // $("#tele").hide();
  // $("#tipo").hide();
  // $("#ACEPTAR").hide();
  // $("#buscar").hide();
  // var mod = document.getElementById("mod");


  // function habilitar() {
    //   let text = "";
    //   if ($("#mod").text() === "Modificar") {
    //     $("#nombr").show();
    //     $("#ape").show();
    //     $("#correo").show();
    //     $("#Usu").show();
    //     $("#contra").show();
    //     $("#tele").show();
    //     $("#tipo").show();
    //     $("#ACEPTAR").show();
    //     $("#buscar").show();

    //     text = "Ocultar";

    //   } else {
    //     $("#nombr").hide();
    //     $("#ape").hide();
    //     $("#correo").hide();
    //     $("#Usu").hide();
    //     $("#contra").hide();
    //     $("#tele").hide();
    //     $("#tipo").hide();
    //     $("#ACEPTAR").hide();
    //     text = "Modificar";


    //   }





    // }
    // $("#mod").html(text);
</script>

</html>