<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idpersona= $_GET['idpersona'];	
	
	$query = "SELECT `Id_Persona`,`Nombre`,`Ape_Paterno`,`Ape_Materno`,`Email`,`Direccion`,`Telefono`,`Sexo`,case `estado` when 1 then 'ACTIVO' WHEN 2 THEN 'CANCELADO' END,case `IdTipoDocumento` when 1 then 'DNI' WHEN 2 THEN 'RUC' WHEN 3 THEN 'PASAPORTE' END ,`DOCUMENTO_NUM`FROM `persona` where Id_persona=$idpersona";
			
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        $idpersona=$row[0];
	$nombre=$row[1];
	$ape_paterno=$row[2];
	$ape_materno=$row[3];
	$email=$row[4];
	$direcion=$row[5];
	$telefono=$row[6];
	$sexo=$row[7];
	$usuario=$row[8];
	$documento=$row[9];
	$numero=$row[10];
	
	 $combog = mysql_query("SELECT * FROM TIPODOCUMENTO WHERE ESTADO=1",$cnn);
         
        
?>



<form id="form_persona_mod" name="form_persona_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Persona</span> 
		</div>
            		
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
				<input type="text" name="txtnombre" id="txtnombre" class="form-control" value="<?php echo $nombre;?>"onkeypress="return soloLetras(event)">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Paterno</span></span>
				<input type="text" name="txtape_paterno" id="txtape_paterno" class="form-control" value="<?php echo $ape_paterno;  ?>"onkeypress="return soloLetras(event)">
			</div>
                        <br>
                        <div class="input-group">
				
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Materno </span></span>
				<input type="text" name="txtape_materno" id="txtape_materno" class="form-control" value="<?php echo $ape_materno;  ?>"onkeypress="return soloLetras(event)">
			</div>
                        
			<br>
			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Sexo&nbsp&nbsp&nbsp </span></span>
				<select id="cbosexo" name="cbosexo" class="form-control" >
                                  <option value="Seleccionar"> Seleccionar</option>	
                                  
                                  <option value="MASCULINO" <?php if('MASCULINO'==$sexo){echo 'selected="selected"';}?>> MASCULINO</option>
                                  <option value="FEMENINO" <?php if('FEMENINO'==$sexo){echo 'selected="selected"';}?>> FEMENINO</option> 
					
				</select>
				
			</div>
			
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true">&nbsp;Telefono&nbsp</span></span>
				<input type="text" name="txttelefono" id="txttelefono" class="form-control" maxlength="15" value="<?php echo $telefono;  ?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Direccion&nbsp</span></span>
				<input type="text" name="txtdireccion" id="txtdireccion" class="form-control" value="<?php echo $direcion;  ?>">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Email&nbsp</span></span>
				<input type="text" name="txtcorreo" id="txtcorreo" class="form-control" value="<?php echo $email;  ?>">
			</div>
                        <br>
			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp;Documento</span></span>
				<select id="cbdocumento" name="cbdocumento" class="form-control"  >
					<option value="Seleccionar"> Seleccionar</option>
                                       
                                         <?PHP  while($sql_p = mysql_fetch_row($combog))
                                        {
                                                                        
                                           if($sql_p[1]==$documento){?>
                                        
                                               <option selected="selected" value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }  else {?>
                                                 <option  value="<?php echo $sql_p[0];?>" ><?php echo $sql_p[1]; ?></option>
                                      <?php }
                                         
                                        } 
        
					?>
                                        
				</select>
                                
                                <span class="input-group-addon"><span class="glyphicon glyphicon-send" aria-hidden="true">&nbsp;Numero&nbsp</span></span>
                                <input type="text" name="txtdocumento" id="txtdocumento" class="form-control" value="<?php echo $numero;  ?>"onkeypress="return soloNumeros(event)">
					
			</div>
			<br>
						
                        <button type="button" onclick="persona_modificar('<?php echo $idpersona;?>');" class="btn btn-info" style="width:200px;"><span  aria-hidden="true" >&nbsp;Actualizar</span></button>
		
			
						
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

