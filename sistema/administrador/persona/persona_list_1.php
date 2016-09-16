<?php
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM V_PERSONA_ACTIVA where nombre like '".$_GET['q']."%' limit 4";
		
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
               <td>Codigo</td>
		<td>Nombre</td>
		<td>Email</td>		
		<td>Direccion</td>
                <td>Opcion</td>
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
                                <td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                <td><Input type="checkbox" class="form-control input-sm"  NAME="persona[]" value="<?php echo$row[0];?>"/></td>
                               		
		  </tr>				
	  <?php } ?>
                  <tr>
                      <td colspan="6" align="center"><button type="submit" class="btn btn-info"  style="width:200px;">Cancelar</button></td>
                  </tr>
	</table>
       
</div>
	
	
<?php
 
 } 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>