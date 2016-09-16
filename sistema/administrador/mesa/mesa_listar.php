<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_mesa where numero like '#".$_GET['q']."%' LIMIT 10";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
	<table class="table table-striped table-hover">	
	  <tr>
			
		<td>Codigo</td>
                <td>Piso</td>
		<td>Numero</td>
                <td>Ubicacion</td>
		<td>Capacidad</td>
                <td>Tipo Mesa</td>
                <td>Estado</td>
                 <td>Accion</td>
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
				<td><h5><?php echo $row[5]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[3]; ?></h5></td>
                                <td><h5><?php echo $row[6]; ?></h5></td>
                                <td><a data-toggle="modal"  data-target="#mesa_mod" class="btn btn-info" onclick="load_div('mesa_modificar', 'mesa/mesa_pre_modificar.php?idmesa='+<?php echo $row[0]; ?>);" style="cursor:pointer">
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
