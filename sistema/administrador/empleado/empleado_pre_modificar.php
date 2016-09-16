<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idempleado= $_GET['idempleado'];	
	
	$query = "SELECT * from v_empleado_2 where idempleado=$idempleado";		
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        $idempleado=$row[0];
	$nombre=$row[1];
	$cargo=$row[2];
	$fecnac=$row[4];
	
        
        $query1 = "SELECT * from empleado where idempleado=$idempleado";		
	$result1=mysql_query($query1, $cnn) or die("Error en la conexion");
	$row1= mysql_fetch_array($result1);
        $idpersona=$row1[0];
        
	 $combog = mysql_query("SELECT * FROM TIPOCUENTA WHERE ESTADO=1",$cnn);
?>

<form id="form_empleado_mod" name="form_empleado_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Empleado</span> 
		</div>
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
                                <input type="hidden"  name="txtidpersona" id="txtidpersona" class="form-control" value="<?php echo $idpersona;?>">
                                <input type="text"  style="width:290px" name="txtpersona" id="txtpersona" class="form-control" placeholder="Seleccione a la persona" disabled="true" value="<?php echo $nombre ?>">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#empleadopersonamod" ><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                           </div>
					
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha de Nacimiento</span></span>
                                <input type="date" name="txtfecnac" id="txtfecnac" class="form-control" value="<?php echo $fecnac; ?>">
			</div>
			<br>
			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp;&nbsp;&nbsp;Cargo&nbsp;&nbsp;</span></span>
                                <select id="cbtpcuenta" name="cbtpcuenta" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                         <?PHP  while($sql_p = mysql_fetch_row($combog))
                                        {
                                                                        
                                           if($sql_p[1]==$cargo){?>
                                        
                                               <option selected="selected" value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }  else {?>
                                                 <option  value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }
                                         
                                        } 
        
					?>
				</select>
			</div>
			<br>
						
				<button type="button" onclick="empleado_mod(<?php echo  $idempleado;?>);" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
	</div>

</form>
<script>

</script>

<?php
	}else{
	header('Location: ../../index.php'); 
}
?>

