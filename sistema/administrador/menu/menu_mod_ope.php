<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	           $descripcion       =$_POST["descripcion"];
                   $menu              =$_POST["menuid"];
                   $precio            =$_POST["precio"];
                   $fecha             =$_POST["fecha"];
                           
	
	    $sql = "UPDATE `menu` SET `menu_Descripcion`='$descripcion',`menu_Estado`=1,`menu_fecha`='$fecha',`menu_precio`='$precio' WHERE `menu_id`=$menu";	
			
	             $result4= mysql_query($sql,$cnn);	
                
            
                
		//echo $result2;
		if ($result4>0) {
			echo "ok";
		} else {
			echo "Error al registrar <br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>