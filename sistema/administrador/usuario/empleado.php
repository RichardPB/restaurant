<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	// echo"<script type=\"text/javascript\">alert('".$_GET['q']."');</script>" ;
         $query = "select  * FROM v_cliente where empleado like '".$_GET['q']."%' and estado=1 LIMIT 5 ";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
<table class="table table-striped table-hover" style="text-align:center;">	
   
	  <tr>
			
		 <td>Codigo</td>
		<td>Nombre</td>
                
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><a href='#' data-dismiss="modal" onclick="empleadousuario(<?php echo $row[0]; ?>,'<?php echo $row[1]; ?>');"><?php echo $row[1]; ?></a></h5></td>   		
                               		
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
		$('#txtidtipo').val(id);
		$('#txttipo').val(nombre);
		}
</script>
