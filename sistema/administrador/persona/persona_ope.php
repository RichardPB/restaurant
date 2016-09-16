<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$nombre 		= $_POST['nombre'];
	$ape_paterno 	        = $_POST['ape_paterno'];	
	$ape_materno     	= $_POST['ape_materno'];
	$sexo 			= $_POST['sexo'];	
		
	$telefono 		= $_POST['telefono'];	
	$direccion 		= $_POST['direccion'];
	$email 			= $_POST['email'];
        $tpdocumento            = $_POST['tpdocumento'];
        $documento              = $_POST['documento'];
		
	
	$sql = "INSERT INTO `persona`(`Nombre`, `Ape_Paterno`, `Ape_Materno`, `Email`, `Direccion`, `Telefono`, `Sexo`, `Estado`,`IdTipoDocumento`, `DOCUMENTO_NUM`) VALUES ('$nombre','$ape_paterno','$ape_materno','$email','$direccion','$telefono','$sexo','1',$tpdocumento,'$documento')";	
			
		$result = mysql_query($sql,$cnn);	
		//echo $result2;
		if ($result>0) {
			echo "OK";
		} else {
			echo "Error al registrar persona: " . $sql . "<br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>