<?php

header('Content-Type: text/html; charset=UTF-8');  
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select * FROM v_plato where nombre like '".$_GET['q']."%' and plato_estado=1 limit 5";
	
	$result = mysql_query($query, $cnn) or die("Error de conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
               <td>Codigo</td>
                <td>Nombre</td>
		<td>Descripcion</td>
		<td>Tipo de Plato</td>
              
                <td>Opcion</td>
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                              
                                <td><Input type="checkbox" class="form-control input-sm"  NAME="plato[]" value="<?php echo$row[0];?>"/></td>
                               		
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