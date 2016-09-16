<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_plato where Nombre like '".$_GET['q']."%' LIMIT 6";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
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
               
                <td>Estado</td>
                <td>Accion</td>
               
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                
                                <td><h5><?php if($row[4]==1){echo "Activado";}elseif($row[4]==2){echo "Cancelado";}else{echo "Reservado";}; ?></h5></td>             		
		
                                <td><a data-toggle="modal"  data-target="#plato_mod" class="btn btn-info" onclick="load_div('plato_modificar', 'plato/plato_pre_modificar.php?idplato='+<?php echo $row[0]; ?>);" style="cursor:pointer">
				    Modificar</a></td>
                               		
		  </tr>				
	  <?php } ?>
                
	</table>
						
	
<?php
        }
 }else{
	header('Location: ../../../index.php'); 
}
 ?>
