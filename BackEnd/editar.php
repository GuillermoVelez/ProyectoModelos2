<?php
//$conex =mysql_connect("localhost","root","","tutorial");
$NombreRecibido=$_POST['Nombre'];
$IdentifiacionRecibido=$_POST['Identifiacion'];
$ApellidoRecibido=$_POST['Apellido'];
$EdadRecibido=$_POST['Edad'];
$DireccionRecibido=$_POST['Direccion'];
$conex = new mysqli("localhost","root","","tutorial");


/*if($conex->connect_error){
	die("Connection failed: " . $conn->connect_error);
	echo "<h2> No nos conectamos<h2>";
}else{
	echo "<h2> Si nos conectamos<h2>";
}*/
$sql= "UPDATE alumnos SET Nombre='$NombreRecibido', Apellido='$ApellidoRecibido', Edad='$EdadRecibido', Direccion_Residencia='$DireccionRecibido' WHERE idAlumno='$IdentifiacionRecibido'";

if ($conex->query($sql)=== TRUE){
	echo json_encode('El Estudiante fue actualizado');
}else{
	echo json_encode('El Estudiante no fue actualizado');
}
$conex->close();

?>

