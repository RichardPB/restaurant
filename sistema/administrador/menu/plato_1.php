<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	// echo"<script type=\"text/javascript\">alert('".$_GET['q']."');</script>" ;
         $query = "select  * FROM v_plato where nombre like '".$_GET['q']."%' and plato_estado=1 LIMIT 8 ";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
	<table class="table table-striped table-hover" align="center">	
	  <tr align="center">
			
		 <td>Codigo</td>
		<td>Nombre</td>
                
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><a href='#' data-dismiss="modal" onclick="platomenumod(<?php echo $row[0]; ?>,'<?php echo $row[1]; ?>');"><?php echo $row[1]; ?></a></h5></td>   		
                               		
		  </tr>				
	  <?php } ?>
                
	</table>
						
	
<?php
        }
 }else{
	header('Location: ../../../index.php'); 
}
 ?>
<script>
	function select(id, nombre) {
		$('#txtidplato').val(id);
		$('#txtplato').val(nombre);
		}
</script>
