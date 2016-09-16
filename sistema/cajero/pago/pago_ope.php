<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	             // $cliente       =$_POST['cliente'];
                  $pedido=$_POST['pedido'];
                  $total=$_POST['total'];
                  $tppago=$_POST['tppago'];
                  $cliente=$_POST['cliente'];
                   
	            $sql = "INSERT INTO `pago`(`IdPedido`, `Total`, `tipo_pago`, `cliente_id`, `estado`)"
                            . " VALUES ($pedido,$total,'$tppago',$cliente,1)"; 
                                 $res4= mysql_query($sql,$cnn);
                            
                                $sql1 = "SELECT MAX(`Idpago`) FROM `pago` ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1);
                                
                                $sql2 = "SELECT * FROM `dt_pedido`";
                                $res2 = mysql_query($sql2,$cnn);
                               
                            
                      while ($row = mysql_fetch_array($res2)) {          
                                $sql3 = "INSERT INTO `dt_pago`(`IdPago`, `cantidad`, `IdPedido`, `subtotal`)"
                                        . "VALUES ($fil1[0], $row[1], $row[0], $row[4])";
                                $res3 = mysql_query($sql3,$cnn);
                                  }	
                                     
                                  $sql4 = "SELECT * FROM `pedido` where idpedido=$pedido";
                                  $res4 = mysql_query($sql4,$cnn);
                                  $fil4 = mysql_fetch_array($res4);
                                  
                                  $sql5 = "UPDATE `mesa` SET `mesa_estado`=1 WHERE `idmesa`=$fil4[3]";
                                  $res5 = mysql_query($sql5,$cnn);
     
                     if ($res5>0) {
			echo "ok";
		} else {
			echo "Error al registrar el usuario: " . $sql2 . "<br>" . mysqli_error($cnn);
		}
}else{
	header('Location: ../../index.php'); 
}
?>