<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idpersona		= $_POST['idpersona'];	
        $idempleado		= $_POST['idempleado'];	
	$fecnac 		= $_POST['fecnac'];
	$cbtpcuenta     	= $_POST['cbtpcuenta'];	
		
	$query = "UPDATE `empleado` SET `idpersona`='$idpersona',`empleado_fecnac`='$fecnac',`idtipocuenta`='$cbtpcuenta' WHERE Idempleado=$idempleado";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "OK";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>