<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../../conexion/conexion.php");
	$cnn=conectar();
        $bebida = $_POST["bebida"];
        $count=count($bebida);
        
       if($count==0){
            echo"No ha seleccionado ninguna bebida" ;
       }else{
                  for($i=0;$i<$count;$i++){
                
                    $query1 = "DELETE FROM `regbebida` WHERE `bebida_id`= $bebida[$i]";

                    mysql_query($query1,$cnn) or die(mysql_errno());       
                    }
         echo 'ok' ;
       }
       
}else{
	header('Location: ../../index.php'); 
}
 
?>
	

