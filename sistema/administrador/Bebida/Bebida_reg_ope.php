<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$nombre = $_POST['nombre'];
        $idTipo = $_POST['idTipo'];
	
	
	$sql2 = "INSERT INTO `bebidas`( `Nombre`, `id_tipobebidas`,`bebida_estado`) VALUES ('$nombre','$idTipo','1')";	
			
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