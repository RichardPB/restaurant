<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $numero      = $_POST['numero'];
                    $nivel       = $_POST['nivel'];
                    $tipomesa    = $_POST['tipomesa'];
                    $ubicacion   =$_POST['ubicacion'];
                    $capacidad   =$_POST['capacidad'];
	
	
	$sql2 = "INSERT INTO `mesa`(`cantmaxcomensales`, `ubicacion`, `IdTipoMesa`, `mesa_piso`, `mesa_numero`, `mesa_estado`) "
                . "           VALUES ($capacidad,$ubicacion,$tipomesa,$nivel, $numero ,1)";	
			
		$result2 = mysql_query($sql2,$cnn);	
		//echo $result2;
		if ($result2>0) {
			echo "ok";
		} else {
			echo "Error al registrar el usuario: " . $sql2 . "<br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>