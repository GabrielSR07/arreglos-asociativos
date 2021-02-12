<?php 

	$nombre3=$_POST['name3'];
	$apellido3=$_POST['last3'];
	$ci3=$_POST['ci3'];
	$sueldo3=$_POST['sueldo3'];
	$direccion3=$_POST['direccion3'];
	$oficina3=$_POST['oficina3'];

	// ARREGLOS ASOCIATIVOS

	
	$datos3 = array("Nombre"=>$nombre3,"Apellido"=>$apellido3,"CI"=>$ci3,"Sueldo"=>$sueldo3,"Dirección"=>$direccion3,"Oficina"=>$oficina3);
	

	foreach ($datos3 as $key => $value) {
		
		echo "$key: $value <br>";

	}

 ?>