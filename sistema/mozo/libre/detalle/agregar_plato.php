<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $cantidad       =$_POST['cantidad'];
                    $nombre         =$_POST['nombre'];
                    $idplato        =$_POST['idplato'];
                    $id             =$_POST['id'];
                    $precio         =$_POST['precio'];
                  
        if($id==1){
            $sql2 = "INSERT INTO `dtpedido`( `menu_id`, `pedido_nombre`, `pedido_cantidad`, `pedido_subtotal`)"
                . " VALUES ($idplato,'$nombre',$cantidad,$precio)";	
			
		$result2 = mysql_query($sql2,$cnn);
        }else{
             $sql2 = "INSERT INTO `dtpedido`( `carta_id`, `pedido_nombre`, `pedido_cantidad`, `pedido_subtotal`)"
                . " VALUES ($idplato,'$nombre',$cantidad,$precio)";	
			
		$result2 = mysql_query($sql2,$cnn);
        }
	
		
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