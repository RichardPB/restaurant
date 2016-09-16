<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idcliente		= $_POST['cliente'];	
	$persona  		= $_POST['persona'];
	
		
	
	$query = "UPDATE `cliente` SET `IdPersona`=$persona,`cliente_estado`=1 WHERE `IdCliente`=$idcliente";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>