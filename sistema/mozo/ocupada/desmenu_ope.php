<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	            $cantidad1       =$_POST['cantidad1'];
                    $cantidad2       =$_POST['cantidad2'];
                  
                    $posicion1       =$_POST['posicion1'];
                    $posicion2       =$_POST['posicion2'];
                  
	            $suma=0;
                    
                    
                    for ($i = 0; $i < count($posicion1); $i++) {
                                $sql1 = "select * from `dt_menu` where `dtmenu_id`=$posicion1[$i] ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1);
                        if($posicion1[$i]==''){
                            
                        }else{
                            $resta=$fil1[3]-$cantidad1[$i];
                           $suma=$suma+$cantidad1[$i];
                            $sql2 = "UPDATE `dt_menu` SET `cantidad`=$resta WHERE `dtmenu_id`=$posicion1[$i]"; 
                            $result2=mysql_query($sql2,$cnn);
                        };
                        
                    }
                    
                    
                     for ($i = 0; $i < count($posicion2); $i++) {
                                $sql1 = "select * from `dt_menu` where `dtmenu_id`=$posicion2[$i] ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1);
                        if($posicion2[$i]==''){
                            
                        }else{
                            $resta=$fil1[3]-$cantidad2[$i];
                            $sql2 = "UPDATE `dt_menu` SET `cantidad`=$resta WHERE `dtmenu_id`=$posicion2[$i]"; 
                             $result2=mysql_query($sql2,$cnn);
                        };
                        
                    }
                   // echo count($posicion3);
                
		
		                 $sql1 = "SELECT menu.menu_precio,`IdMenu`  FROM `dt_menu` inner JOIN menu on menu.menu_id=dt_menu.IdMenu ";
                                $res1 = mysql_query($sql1,$cnn);
                                $fil1 = mysql_fetch_array($res1);
                                $precio=$fil1[0];
                    
		if ($result2>0) {
                    if($suma<9){
                        if( $suma==1){
                            $array = array("ok", "0".$suma, "0".($suma * $precio),"0".$fil1[1],1);
                             for ($index = 0; $index < 5; $index++) {
                             echo $array[$index]; }
                        }else{
                          $array = array("ok", "0".$suma,($suma * $precio),"0".$fil1[1],1);
                          
                            for ($index = 0; $index < 5; $index++) {
                          echo $array[$index]; 
                        };}
                    }else{
                        $array = array("ok", $suma, ($suma * $precio),$fil1[1],1);
                            for ($index = 0; $index < 5; $index++) {
                          echo $array[$index]; 
                    };
                         
                    };
                    
		} else {
                     $array = array($sql2, $suma, ($suma * $precio));
                               
                    
                  
                     
                };					

}else{
	header('Location: ../../index.php'); 
}
?>