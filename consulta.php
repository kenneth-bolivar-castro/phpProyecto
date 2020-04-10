<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
include 'conexion.php';
if ($conexion -> connect_errno)
{

}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM Usuarios ORDER BY Usuario";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['Usuario']))
{
	$q=$conexion->real_escape_string($_POST['Usuario']);
	$query="SELECT * FROM Usuarios WHERE 
		Nombre LIKE '%".$q."%' OR
		Apellidos LIKE '%".$q."%' OR
		Correo LIKE '%".$q."%' OR
		Usuario LIKE '%".$q."%' OR
		Contra LIKE '%".$q."%' OR
		Telefono LIKE '%".$q."%' OR
		TipoUsuario LIKE '%".$q."%'";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>id</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Correo</td>
			<td>Usuario</td>
			<td>Contra</td>
			<td>Telefono</td>
			<td>Tipo Usuario</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'
		<tr>
			<td>'.$filaAlumnos['id'].'</td>
			<td>'.$filaAlumnos['Nombre'].'</td>
			<td>'.$filaAlumnos['Apellidos'].'</td>
			<td>'.$filaAlumnos['Correo'].'</td>
			<td>'.$filaAlumnos['Usuario'].'</td>
			<td>'.$filaAlumnos['Contra'].'</td>
			<td>'.$filaAlumnos['Telefono'].'</td>
			<td>'.$filaAlumnos['TipoUsuario'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
