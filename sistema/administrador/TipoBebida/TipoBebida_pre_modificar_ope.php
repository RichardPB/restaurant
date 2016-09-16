<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idTipoBebida		= $_POST['idTipoBebida'];
        $nombre	        	= $_POST['nombre'];
	
		
	$query = "UPDATE tipo_bebidas set nombre_tipo='$nombre' WHERE Id_TipoBebidas=$idTipoBebida";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>