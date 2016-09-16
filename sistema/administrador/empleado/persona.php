<?php
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM V_PERSONA where nombre like '".$_GET['q']."%' limit 8";
		
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover" style="text-align:center;">	
	  <tr align="center">
			
                <td>Codigo</td>
		<td>Nombre</td>
		
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
                                <td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><a href='#' data-dismiss="modal" onclick="empleadopersona(<?php echo $row[0]; ?>,'<?php echo $row[1]; ?>');"><?php echo $row[1]; ?></a></h5></td>   		
                               	
                                	
		  </tr>				
	  <?php } ?>
                
	</table>
       
</div>
	
	
<?php
 
 } 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>