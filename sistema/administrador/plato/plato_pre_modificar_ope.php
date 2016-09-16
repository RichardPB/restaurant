<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
          $idplato     = $_POST['idplato'];
          $nombre       =$_POST['nombre'];
          $descripcion  =$_POST['descripcion'];
         
          $cbtpplato    =$_POST['cbtpplato'];
		
	$query = "UPDATE `plato` SET `Nombre`='$nombre',`Descripcion`='$descripcion',`Id_TipoPlato`=$cbtpplato,`plato_estado`=1 WHERE id_plato=$idplato";
	 //echo $query;
        mysql_query($query, $cnn) or die("Error en la conexion");
       
	echo "ok";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>