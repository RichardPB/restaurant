<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "SELECT * FROM `V_USUARIO`WHERE persona  like '".$_GET['q']."%' LIMIT 4";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>

<form id="form_usuario_listar" name="form_usuario_listar" class="form-vertical">
	<div class="panel panel-warning">
				
		<div class="panel-body">
	<table class="table table-striped table-hover">	
	  <tr>
			
		
		<td>Usuario</td>		
		<td>Empleado</td>
                <td>Cuenta</td>
                <td>Fecha de Activacion </td>
                 <td>Fecha de Cancelación </td>
		<td>Estado</td>
                
		
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
				<td><h5><?php echo $row[4]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
                                <td><h5><?php echo $row[5]; ?></h5></td>
                               
		  </tr>				
	  <?php } ?>
                
	</table>
						
		</div>
		
	</div>

</form>
<?php
        }
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

