<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../../conexion/conexion.php");
	$cnn=conectar();
        $plato = $_POST["plato"];
        $count=count($plato);
        
       if($count==0){
            echo"No ha seleccionado ninguna plato" ;
       }else{
                  for($i=0;$i<$count;$i++){
                
                    $query1 = "DELETE FROM `regplato` WHERE `plato_id`= $plato[$i]";

                    mysql_query($query1,$cnn);       
                    }
         echo "ok" ;
       }
       
}else{
	header('Location: ../../index.php'); 
}
 
?>
	

