<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM v_bebida where nombre like '".$_GET['q']."%' LIMIT 5";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
	<table class="table table-striped table-hover">	
	  <tr>
			
		 <td>Codigo</td>
		<td>Nombre</td>
			
                <td>Tipo</td>
                <td>Acción</td>
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>			
                                <td><h5><?php echo $row[2]; ?></h5></td>
                                <td><a data-toggle="modal"  data-target="#empleadomod" class="btn btn-info" onclick="load_div('modal_empleado_mod', 'Bebida/Bebida_pre_modificar.php?idBebida='+<?php echo $row[0]; ?>);" style="cursor:pointer">
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
