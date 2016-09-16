<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $nombre       =$_POST['nombre'];
                    $nombre1      =$_POST['nombre1'];
                    $cantidad     =$_POST['cantidad'];
                  
	
	
	$sql2 = "INSERT INTO `regbebida`(`bebida_id`, `bebida_nombre`, `bebida_stock`) VALUES ( $nombre ,'$nombre1', $cantidad)";	
			
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