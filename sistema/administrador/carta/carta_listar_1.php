<?php
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
        $query1 = "select  * FROM v_carta1 where Nombre like '".$_GET['q']."%' LIMIT 6";
	$result1 = mysql_query($query1, $cnn) or die("Error en la conexion");
        $cantidad1 = is_resource($result1) ? mysql_num_rows($result1) : 0;
        
        $query = "select  * FROM v_carta where Nombre like '".$_GET['q']."%' LIMIT 6";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
        
	
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Tipo Plato</td>
		<td>Descripcion</td>
		<td>Precio</td>
                <td>Estado</td>
               
            
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
                               
                                <td><h5><?php if($row[5]==1){echo "Activado";}elseif($row[5]==2){echo "Cancelado";}; ?></h5></td>             		
		  </tr>				
          <?php $contador++;}} ?>
                  
                    <?php
                    if($cantidad1>0){
                    while ($row1 = mysql_fetch_array($result1)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $contador; ?></h5></td>
                                <td><h5><?php echo $row1[1]; ?></h5></td>
                                <td><h5><?php echo $row1[2]; ?></h5></td>
				<td><h5><?php echo $row1[3]; ?></h5></td>
				<td><h5><?php echo $row1[4]; ?></h5></td>
                               
                                <td><h5><?php if($row1[5]==1){echo "Activado";}elseif($row1[5]==2){echo "Cancelado";}; ?></h5></td>             		
		  </tr>				
                    <?php $contador++;}} ?>
	</table>
       
</div>
	
	
<?php
 

 }else{
	header('Location: ../../../index.php'); 
}
 ?>