<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	            $tp           =$_POST['tp'];
	            $nombre       =$_POST['nombre'];
                    $descripcion  =$_POST['descripcion'];
                    $precio       =$_POST['precio'];
                    $stock        =$_POST['stock'];
                    $fecha        =$_POST['fecha'];
	
                    if($tp==1){
                        $sql2 = "INSERT INTO `carta`( `plato_id`, `carta_descripcion`, `carta_precio`, `carta_estado`, `carta_stock`, `carta_fecha`)"
                         . " VALUES ($nombre,'$descripcion',$precio,1,$stock,' $fecha')";	
			
		        $result2 = mysql_query($sql2,$cnn);
                        
                    }else{
                        $sql2 = "INSERT INTO `carta`(`bebida_id`,`carta_descripcion`, `carta_precio`, `carta_estado`, `carta_stock`, `carta_fecha`)"
                         . " VALUES ($nombre,'$descripcion',$precio,1,$stock,' $fecha')";	
			
		        $result2 = mysql_query($sql2,$cnn);
                    };
	
		
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