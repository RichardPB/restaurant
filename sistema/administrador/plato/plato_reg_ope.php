<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $nombre       =$_POST['nombre'];
                    $descripcion  =$_POST['descripcion'];
                    
                    $cbtpplato    =$_POST['cbtpplato'];
	
	
	$sql2 = "INSERT INTO `plato`( `Nombre`, `Descripcion`,`Id_TipoPlato`, `plato_estado`) "
                . "VALUES ('$nombre','$descripcion','$cbtpplato',1)";	
			
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