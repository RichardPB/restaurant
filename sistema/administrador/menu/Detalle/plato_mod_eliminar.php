<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../../conexion/conexion.php");
	$cnn=conectar();
        $plato = $_POST["plato1"];
        $count=count($plato);
        
       if($count==0){
            echo"No ha seleccionado ninguna plato" ;
       }else{
                  for($i=0;$i<$count;$i++){
                      echo $plato[$i];
                    $query1 = "DELETE FROM `dt_menu` WHERE `dtmenu_id`= $plato[$i]";
                   
                    mysql_query($query1,$cnn);       
                    }
         echo "ok" ;
       }
       
}else{
	header('Location: ../../index.php'); 
}
 
?>
	

