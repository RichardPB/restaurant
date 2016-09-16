<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../conexion/conexion.php");
	$cnn=conectar();
        $TipoBebida=$_POST["TipoBebida"];
        $count=count($TipoBebida);
      
        $query = "select  TipoBebida_estado  FROM tipo_bebidas where id_tipobebidas = '$TipoBebida[0]' ";
            
        $result = mysql_query($query, $cnn) or die("Error en la conexion");
        $row = mysql_fetch_array($result);
       
        if($row[0]== 1 ){
             for($i=0;$i<$count;$i++){
                
	$query1 = "UPDATE `Tipo_bebidas` SET `TipoBebida_estado`='2' WHERE id_TipoBebidas = '$TipoBebida[$i]'";
        
        mysql_query($query1,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente');  window.location='../index.php';</script>" ;
        }  else {
             
           
             for($i=0;$i<$count;$i++){
           
	$query2 = "UPDATE `Tipo_bebidas` SET `TipoBebida_estado`='1' WHERE id_TipoBebidas = '$TipoBebida[$i]'";
        mysql_query($query2,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente'); window.location='../index.php';</script>" ;
        }
       
}
?>
	

