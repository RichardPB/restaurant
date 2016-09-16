<?php

header('Content-Type: text/html; charset=UTF-8');  
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_carta where Nombre like '".$_GET['q']."%' and carta_estado=1 limit 5";
	
	$result = mysql_query($query, $cnn) or die("Error de conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
        
        $query1 = "select  * FROM v_carta1 where Nombre like '".$_GET['q']."%' and carta_estado=1 limit 5";
	
	$result1 = mysql_query($query1, $cnn) or die("Error de conexion");
	$cantidad1 = is_resource($result1) ? mysql_num_rows($result1) : 0;
	
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Tipo Plato</td>
		<td>Descripcion</td>
		<td>Precio</td> 
                <td>Opcion</td>
            
	  </tr>
	  <?php
          if($cantidad>0){
              $contador=1;
          while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                               <td><h5><?php echo $contador; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
				<td><h5><?php echo $row[4]; ?></h5></td>
                              
                                <td><Input type="checkbox" class="form-control input-sm"  NAME="carta[]" value="<?php echo$row[0];?>"/></td>
                               		
		  </tr>				
          <?php $contador++;}} ?>
              <?php
          if($cantidad1>0){
          while ($row = mysql_fetch_array($result1)) { ?>		
		  <tr align="center">
                               <td><h5><?php echo $contador; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
				<td><h5><?php echo $row[4]; ?></h5></td>
                              
                                <td><Input type="checkbox" class="form-control input-sm"  NAME="carta[]" value="<?php echo$row[0];?>"/></td>
                               		
		  </tr>				
          <?php $contador++;}} ?>      
                  
                  
                  <tr>
                      <td colspan="6" align="center"><button type="submit" class="btn btn-info"  style="width:200px;">Cancelar</button></td>
                  </tr>
	</table>
       
</div>
	
	
<?php

 }else{
	header('Location: ../../../index.php'); 
}
 ?>