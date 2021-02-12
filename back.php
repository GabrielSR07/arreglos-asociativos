<?php 

	$nombre1=$_POST['name'];
	$apellido1=$_POST['last'];
	$ci1=$_POST['ci'];
	$sueldo1=$_POST['sueldo'];
	$direccion1=$_POST['direccion'];
	$oficina1=$_POST['oficina'];


	// ARREGLOS ASOCIATIVOS

	
	$datos1 = array("Nombre"=>$nombre1,"Apellido"=>$apellido1,"CI"=>$ci1,"Sueldo"=>$sueldo1,"Dirección"=>$direccion1,"Oficina"=>$oficina1);
	

	foreach ($datos1 as $key => $value) {
		
		echo "$key: $value <br>";

	}
 ?>