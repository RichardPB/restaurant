<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select * from v_cliente1 where nombre like '".$_GET['q']."%'";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
	<table class="table table-striped table-hover">	
	  <tr>
			
		<td>Codigo</td>
		<td>Nombre</td>		
		
                <td>Estado</td>
                <td>Acción</td>
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
				 <td><h5><?php if($row[2]==1){echo 'Activado';}else{echo "Cancelado";}; ?></h5></td>
                                <td><a data-toggle="modal"  data-target="#personamod" class="btn btn-info" onclick="load_div('modal_persona_mod', 'cliente/cliente_pre_modificar.php?idpersona='+<?php echo $row[0]; ?>);" style="cursor:pointer">
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

