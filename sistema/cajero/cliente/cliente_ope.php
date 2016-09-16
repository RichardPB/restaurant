<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$idpersona 		= $_POST['persona'];
	
	
	$sql = "INSERT INTO `cliente`( `IdPersona`, `cliente_estado`) "
                . "VALUES ($idpersona,1)";	
			
		$result = mysql_query($sql,$cnn);	
		//echo $result2;
		if ($result>0) {
			echo "ok";
		} else {
			echo "Error al registrar persona: " . $sql . "<br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>