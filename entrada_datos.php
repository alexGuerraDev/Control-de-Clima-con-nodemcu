<?php
	$con=mysqli_connect("localhost","ingguerra_emb","yet2ksn2017*","ingguerra_emb");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	
  	date_default_timezone_set("America/Bogota");
        $fecha= date ('Y-m-d H:i:s');
       // print($fecha);
    	
	$humedad = $_POST['humedad'];
	$temperatura = $_POST['temp'];
	mysqli_query($con,"INSERT INTO `temperatura` (`id`, `fecha`, `humedad`, `temperatura`) VALUES (NULL, '$fecha', $humedad, $temperatura);");
	echo "Se ha ingresado los datos correctamente";
	
	
	$humedad2 = $_POST['humedad2'];
	$temperatura2 = $_POST['temp2'];
    	mysqli_query($con,"INSERT INTO `sensor2` (`id`, `fecha`, `humedad`, `temperatura`) VALUES (NULL, '$fecha', $humedad2, $temperatura2);");
	echo "Se ha ingresado los datos correctamente";
	
	mysqli_close($con);

?>