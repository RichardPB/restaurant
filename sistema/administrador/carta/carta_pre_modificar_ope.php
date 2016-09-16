<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
          $tp     = $_POST['tp'];
          $idcarta     = $_POST['idcarta'];
         $nombre       =$_POST['nombre'];
                    $descripcion  =$_POST['descripcion'];
                    $precio       =$_POST['precio'];
                    $stock        =$_POST['stock'];
                    $fecha        =$_POST['fecha'];
		
                    if($tp==1){
                        $query = "UPDATE `carta` SET `plato_id`=$nombre,`carta_descripcion`='$descripcion',"
                        . "`carta_precio`=$precio,`carta_estado`=1,`carta_stock`=$stock,`carta_fecha`=' $fecha' WHERE carta_id= $idcarta";
                                //echo $query;
                        mysql_query($query, $cnn) or die("Error en la conexion");
                    }else{
                        $query = "UPDATE `carta` SET `bebida_id`=$nombre,`carta_descripcion`='$descripcion',"
                        . "`carta_precio`=$precio,`carta_estado`=1,`carta_stock`=$stock,`carta_fecha`=' $fecha' WHERE carta_id= $idcarta";
                                //echo $query;
                        mysql_query($query, $cnn) or die("Error en la conexion");
                    };
                    

       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>