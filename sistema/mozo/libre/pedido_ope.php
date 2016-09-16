<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	             // $cliente       =$_POST['cliente'];
                      $fecha       =$_POST['fecha'];
                      $empleado       =$_POST['empleado'];
                      $mesa       =$_POST['mesa'];
                   
	            $sql = "INSERT INTO `pedido`(`FechaPedido`, `IdEmpleado`,`mesa_id`) "
                            . "VALUES ( '$fecha',$empleado,$mesa)"; 
                                  mysql_query($sql,$cnn);
                            
                                $sql1 = "SELECT MAX(`IdPedido`) FROM `pedido` ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1);
                                
                                $sql2 = "SELECT * FROM `dtpedido`";
                                $res2 = mysql_query($sql2,$cnn);
                               
                            
                            
                            
                      while ($row = mysql_fetch_array($res2)) {          
                                $sql3 = "INSERT INTO `dt_pedido`(`IdPedido`, `Cantidad`, `IdCarta`, `menu_id`, `pedido_subtotal`) "
                                        . "VALUES ($fil1[0], $row[4], $row[2], $row[1],$row[5])";
                                $res3 = mysql_query($sql3,$cnn);
                                  }	
                                  $sql4 = "DELETE FROM `dtpedido` ";
                                  $res4 = mysql_query($sql4,$cnn);
                                  
                                  $sql5 = "UPDATE `mesa` SET `mesa_estado`=2 WHERE `idmesa`=$mesa";
                                  $res5 = mysql_query($sql5,$cnn);
      
                     if ($res4>0) {
			echo "ok";
		} else {
			echo "Error al registrar el usuario: " . $sql2 . "<br>" . mysqli_error($cnn);
		}
}else{
	header('Location: ../../index.php'); 
}
?>