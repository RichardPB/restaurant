<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idpersona		= $_POST['idpersona'];	
	$nombre 		= $_POST['nombre'];
	$ape_paterno     	= $_POST['ape_paterno'];	
	$ape_materno    	= $_POST['ape_materno'];
	$sexo 			= $_POST['sexo'];	
	$telefono 		= $_POST['telefono'];	
	$direccion 		= $_POST['direccion'];
	$email 			= $_POST['email'];
        $tpdocumento            = $_POST['tpdocumento'];
        $numero                 = $_POST['numero'];
		
	
	$query = "UPDATE `persona` SET `Nombre`='$nombre',`Ape_Paterno`='$ape_paterno',`Ape_Materno`='$ape_materno',`Email`='$email',`Direccion`='$direccion',`Telefono`='$telefono',`Sexo`='$sexo',`IdTipoDocumento`=$tpdocumento,`DOCUMENTO_NUM`='$numero' WHERE Id_Persona=$idpersona";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "OK";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>