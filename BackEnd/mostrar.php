<?php

$conex = new mysqli("localhost","root","","tutorial");
$resultados = mysqli_query($conex ,"SELECT * FROM alumnos");
while($consulta = mysqli_fetch_array($resultados))
{
	$arrayDatos[] = $consulta;
	

}
echo json_encode($arrayDatos);
//echo json_encode($arrayDatos);
/*
for ($i = 0 ; $i < sizeof($arrayDatos) ; $i++)
{

	echo "<br>XXXXXXXXXXX";
	echo "<br>";
	echo $arrayDatos[$i]['Id'];
	echo "<tb>";
	echo $arrayDatos[$i]['Nombre'];

}
//print_r ($resultados);

/*if($conex->connect_error){
	die("Connection failed: " . $conn->connect_error);
	echo "<h2> No nos conectamos<h2>";
}else{
	echo "<h2> Si nos conectamos<h2>";
}*/

$conex ->close();
?>