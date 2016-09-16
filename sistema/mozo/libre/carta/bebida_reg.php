<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $cantidad1       =$_POST['c'];
                    $posicion1       =$_POST['p'];
                   
	            $suma=0;
                    
                     for ($i = 0; $i < count($posicion1); $i++) {          
                                $sql1 = "select * from `v_carta1` where `carta_id`=$posicion1[$i] ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1); 
                        
                        if($cantidad1[$i]==''){
                            
                        }else{
                            $subtotal=$fil1[4]*$cantidad1[$i];
                            $sql2 = "INSERT INTO `dtpedido`(`carta_id`, `pedido_nombre`, `pedido_cantidad`, `pedido_subtotal`) "
                                    . "VALUES ($posicion1[$i],'$fil1[1]',$cantidad1[$i],$subtotal)"; 
                            $result2=mysql_query($sql2,$cnn);
                        };
                     }				
      
                     if ($result2>0) {
			echo "ok";
		} else {
			echo "Error al registrar el usuario: " . $sql2 . "<br>" . mysqli_error($cnn);
		}
}else{
	header('Location: ../../index.php'); 
}
?>