<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$idpersona 		= $_POST['idpersona'];
	$fecnac 	        = $_POST['fecnac'];	
	$cbtpcuenta     	= $_POST['cbtpcuenta'];
	            	
	
	$sql = "INSERT INTO `empleado`(`IdPersona`, `empleado_fecnac`, `idtipocuenta`, `empleado_fecreg`, `empleado_estado`) VALUES ($idpersona,'$fecnac',$cbtpcuenta,now(),'1')";	
			
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