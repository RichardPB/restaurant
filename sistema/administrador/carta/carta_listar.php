<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_carta where Nombre like '".$_GET['q']."%' LIMIT 6";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
        
        $query1 = "select  * FROM v_carta1 where Nombre like '".$_GET['q']."%' LIMIT 6";
	$result1 = mysql_query($query1, $cnn) or die("Error en la conexion");
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
                <td>Stock</td>
                <td>Fecha</td>
                <td>Estado</td>
                 <td>Accion</td>
               
            
	  </tr>
	  <?php 
          if($cantidad>0){
          while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
                                <td><h5><?php echo $row[6]; ?></h5></td>
				<td><h5><?php echo $row[7]; ?></h5></td>
                                <td><h5><?php if($row[5]==1){echo "Activado";}elseif($row[5]==2){echo "Cancelado";}; ?></h5></td>             		
		                <td><a data-toggle="modal"  data-target="#carta_mod" class="btn btn-info" onclick="load_div('carta_modificar', 'carta/carta_pre_modificar.php?idcarta='+<?php echo $row[0]; ?>);" style="cursor:pointer">
				    Modificar</a></td>
                               		
		  </tr>				
          <?php }} ?>
          
           <?php 
           if($cantidad1>0){
           while ($row = mysql_fetch_array($result1)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
                                <td><h5><?php echo $row[6]; ?></h5></td>
				<td><h5><?php echo $row[7]; ?></h5></td>
                                <td><h5><?php if($row[5]==1){echo "Activado";}elseif($row[5]==2){echo "Cancelado";}; ?></h5></td>             		
		                <td><a data-toggle="modal"  data-target="#carta_mod" class="btn btn-info" onclick="load_div('carta_modificar', 'carta/carta_pre_modificar.php?idcarta='+<?php echo $row[0]; ?>);" style="cursor:pointer">
				    Modificar</a></td>
                               		
		  </tr>				
           <?php }} ?>
                
	</table>
						
	
<?php
      
 }else{
	header('Location: ../../../index.php'); 
}
 ?>
