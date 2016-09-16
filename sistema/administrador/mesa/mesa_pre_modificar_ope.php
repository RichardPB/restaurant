<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
          $idmesa     = $_POST['idmesa'];
          $numero      = $_POST['numero'];
          $nivel       = $_POST['nivel'];
          $tipomesa    = $_POST['tipomesa'];
          $ubicacion   =$_POST['ubicacion'];
          $capacidad   =$_POST['capacidad'];
	
		
	$query = "UPDATE `mesa` SET `cantmaxcomensales`=$capacidad,`ubicacion`=$ubicacion,`IdTipoMesa`=$tipomesa,"
                . "`mesa_piso`=$nivel ,`mesa_numero`=$numero WHERE `idmesa`=$idmesa";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>