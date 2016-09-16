<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	           $descripcion       =$_POST["descripcion"];
                   $precio            =$_POST["precio"];
                   $fecha             =$_POST["fecha"];
                           
	
	    $sql = "INSERT INTO `menu`( `menu_Descripcion`, `menu_Estado`, `menu_fecha`, `menu_precio`)"
                . "  VALUES ('$descripcion',1,'$fecha','$precio')";	
			
	              mysql_query($sql,$cnn);	
                
            
            
             $sql1 = "SELECT MAX(`menu_id`) FROM `menu`";
                    $res1 = mysql_query($sql1,$cnn);
                    $fil1 = mysql_fetch_array($res1);
                    $menuid = $fil1[0];
            
         
            
            
            $query1 = "select  * FROM regplato";
            $result2 = mysql_query($query1, $cnn) or die("Error de conexion");
            while ($row1 = mysql_fetch_array($result2)) { 
                    $sql = "INSERT INTO `dt_menu`(`IdMenu`, `Id_plato`, `cantidad`, `estado`) "
                            . "VALUES ($menuid,$row1[0],$row1[2],1)";	
		    $result3=mysql_query($sql,$cnn);	         
            }
                
            $sql = "DELETE FROM `regplato`";	
			
	              $result4=mysql_query($sql,$cnn);
            
            
                
                
		//echo $result2;
		if ($result4>0) {
			echo "ok";
		} else {
			echo "Error al registrar <br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>