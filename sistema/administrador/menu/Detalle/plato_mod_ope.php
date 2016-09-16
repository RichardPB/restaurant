<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../../conexion/conexion.php");
	$cnn = conectar();
	        
                    $menuid       =$_POST['menuid'];
	            $nombre       =$_POST['nombre'];
                    $nombre1      =$_POST['nombre1'];
                    $cantidad     =$_POST['cantidad'];
        
	$sql2 = "INSERT INTO `dt_menu`(`IdMenu`, `Id_plato`, `cantidad`, `estado`) VALUES"
                . " ($menuid,$nombre,$cantidad,'1')";	
			
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