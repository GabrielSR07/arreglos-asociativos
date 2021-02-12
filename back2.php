<?php 

	$nombre2=$_POST['name2'];
	$apellido2=$_POST['last2'];
	$ci2=$_POST['ci2'];
	$sueldo2=$_POST['sueldo2'];
	$direccion2=$_POST['direccion2'];
	$oficina2=$_POST['oficina2'];

	
	// ARREGLOS ASOCIATIVOS
	
	$datos2 = array("Nombre"=>$nombre2,"Apellido"=>$apellido2,"CI"=>$ci2,"Sueldo"=>$sueldo2,"Dirección"=>$direccion2,"Oficina"=>$oficina2);
	

	foreach ($datos2 as $key => $value) {
		
		echo "$key: $value <br>";

	}

 ?>