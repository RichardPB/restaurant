<?php
header("Content-Type: text/html;charset=utf-8");
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_bebida where nombre like '".$_GET['q']."%' and estado='Cancelado' limit 4";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
		<td>Nombre</td>
		<td>Tipo</td>		
                <td>Opcion</td>
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				
                                <td><Input type="checkbox" class="form-control input-sm"  NAME="Bebida[]" value="<?php echo$row[0];?>"/></td>
                               		
		  </tr>				
	  <?php } ?>
                  <tr>
                      <td colspan="4" align="center"><button type="submit" class="btn btn-info"  style="width:200px;">Activar</button></td>
                  </tr>
	</table>
       
</div>
	
	
<?php
 
 } 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>