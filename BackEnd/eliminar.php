<?php
//$conex =mysql_connect("localhost","root","","tutorial");
$IdentifiacionRecibido=$_POST['Identifiacion'];

$conex = new mysqli("localhost","root","","tutorial");



$sql="DELETE From alumnos WHERE idAlumno='$IdentifiacionRecibido'";
if ($conex->query($sql)=== TRUE){
	echo json_encode('El Estudiante pudo ser eliminado');
}else{
	echo json_encode('El Estudiante no pudo ser eliminado');
}

$conex->close();

?>