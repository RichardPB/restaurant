<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "SELECT `Id_Persona`,concat(`Nombre`,' ',`Ape_Paterno`,' ',`Ape_Materno`),`Email`,`Direccion`,`Telefono`,`Sexo`,case `estado` when 1 then 'ACTIVO' WHEN 2 THEN 'CANCELADO' END,case `IdTipoDocumento` when 1 then 'DNI' WHEN 2 THEN 'RUC' WHEN 3 THEN 'PASAPORTE' END ,`DOCUMENTO_NUM`FROM `persona` where concat(`Nombre`,' ',`Ape_Paterno`,' ',`Ape_Materno`) like '".$_GET['q']."%'";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
 ?>	
	<table class="table table-striped table-hover">	
	  <tr>
			
		<td>Codigo</td>
		<td>Nombre</td>		
		<td>Email</td>
                <td>Direccion</td>
                <td>Telefono</td>
		<td>Sexo</td>
                <td>Docuento</td>
		<td>Numero</td>
                <td>Estado</td>
                <td>Acción</td>
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
                                <td><h5><?php echo $row[5]; ?></h5></td>
                                <td><h5><?php echo $row[7]; ?></h5></td>
                                <td><h5><?php echo $row[8]; ?></h5></td>
                                <td><h5><?php echo $row[6]; ?></h5></td>
                                <td><a data-toggle="modal"  data-target="#personamod" class="btn btn-info" onclick="load_div('modal_persona_mod', 'persona/persona_pre_modificar.php?idpersona='+<?php echo $row[0]; ?>);" style="cursor:pointer">
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

