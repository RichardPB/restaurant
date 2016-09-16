<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idmesa= $_GET['idmesa'];	
	
	$query = "SELECT * from mesa where idmesa=$idmesa";	
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        
	 $combog = mysql_query("SELECT * FROM tipomesa WHERE ESTADO=1",$cnn);
	
?>

<form id="form_mesa_mod" name="form_mesa_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Mesa</span> 
		</div>
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Numero&nbsp</span></span>
                           
                                <input type="text"  name="txtnumero" id="txtnumero" class="form-control"  value="<?php echo $row[5];?>" >
			       
                        </div>
                    <br>
			  <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-align-center" aria-hidden="true">&nbsp;Piso&nbsp;&nbsp;</span></span>
				<select id="cbnivel" name="cbnivel" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                        <option value="1" <?php if($row[4]==1){echo "selected='selected'";};?>> Primer Nivel</option>
                                        <option value="2" <?php if($row[4]==2){echo "selected='selected'";};?>> Segundo Nivel</option>
                                        <option value="3" <?php if($row[4]==3){echo "selected='selected'";};?>> Tercer Nivel</option>
                                         
					
				</select>
			</div>	
			<br>
                        <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-th-large" aria-hidden="true">&nbsp;Tipo Mesa&nbsp;&nbsp;</span></span>
				<select id="cbtpmesa" name="cbtpmesa" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                         <?PHP  while($sql_p = mysql_fetch_row($combog))
                                        {
                                                                        
                                           if($sql_p[0]==$row[3]){?>
                                        
                                               <option selected="selected" value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }  else {?>
                                                 <option  value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }
                                         
                                        } 
        
					?>
					
				</select>
			</div>
			<br>
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Capacidad&nbsp</span></span>
                           <select id="cbcapacidad" name="cbcapacidad" class="form-control" >
					 <option value="Seleccionar"> Seleccionar</option>
                                          <option value="2" <?php if($row[1]==2){echo "selected='selected'";};?>> Personas 2</option>
                                          <option value="4" <?php if($row[1]==4){echo "selected='selected'";};?>> Personas 4</option>
                                          <option value="6" <?php if($row[1]==6){echo "selected='selected'";};?>> Personas 6</option>
                                          <option value="8" <?php if($row[1]==8){echo "selected='selected'";};?>> Personas 8</option>
   
				</select>
                        </div>
                        <br>
                        <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-move" aria-hidden="true">&nbsp;Ubicacion&nbsp;&nbsp;</span></span>
				<select id="cbubicacion" name="cbubicacion" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                          <option value="1" <?php if($row[2]==1){echo "selected='selected'";};?>> Izquierda</option>
                                         <option value="2" <?php if($row[2]==2){echo "selected='selected'";};?>> Centro</option>
                                          <option value="3" <?php if($row[2]==3){echo "selected='selected'";};?>> Derecha</option>
   
				</select>
			</div>
                      
                        <br>
                        <button type="button" onclick="mesa_mod(<?php echo $idmesa;?>);" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Modificar</span></button>
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

