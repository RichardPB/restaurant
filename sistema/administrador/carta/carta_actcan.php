<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../conexion/conexion.php");
	$cnn=conectar();
        $plato=$_POST["carta"];
        $count=count($plato);
      
        $query = "select carta_estado  FROM carta where carta_id = '$plato[0]' ";
            
        $result = mysql_query($query, $cnn) or die("Error en la conexion");
        $row = mysql_fetch_array($result);
       
        if($row[0]== 1 ){
             for($i=0;$i<$count;$i++){
                
	$query1 = "UPDATE `carta` SET `carta_estado`='2' WHERE carta_id = '$plato[$i]'";
        
        mysql_query($query1,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente');  window.location='../index.php';</script>" ;
        }  else {
             
           
             for($i=0;$i<$count;$i++){
           
	$query2 = "UPDATE `carta` SET `carta_estado`='1' WHERE carta_id = '$plato[$i]'";
        mysql_query($query2,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente'); window.location='../index.php';</script>" ;
        }
       
}
?>
	

