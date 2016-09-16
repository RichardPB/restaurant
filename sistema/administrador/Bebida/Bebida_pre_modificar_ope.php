<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
        $idBebida               = $_POST['idbebida'];
	$idTipoBebida		= $_POST['idTipo'];
        $nombre	        	= $_POST['nombre'];
	
		
	$query = "UPDATE bebidas set nombre='$nombre',id_tipobebidas=$idTipoBebida WHERE Id_Bebidas= $idBebida  ";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>