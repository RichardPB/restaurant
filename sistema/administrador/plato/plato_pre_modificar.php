<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idplato= $_GET['idplato'];	
	
	$query = "SELECT * from plato where id_plato=$idplato";	
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        
	 $combog = mysql_query("SELECT * FROM tipo_plato WHERE ESTADO=1",$cnn);
	
?>
<form id="form_plato_mod" name="form_plato_mod" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar de Plato</span> 
	</div>
	<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                           
                                <input type="text"  name="txtnombre" id="txtnombre" class="form-control"  value="<?php echo $row['1'];?>" >
			       
                        </div>
                    <br>
			  <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Descripcion&nbsp</span></span>
                           
                                <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control"  value="<?php echo $row['2'];?>" >
			       
                        </div>
			
			<br>
                       <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-th-large" aria-hidden="true">&nbsp;Tipo Plato&nbsp;&nbsp;</span></span>
				<select id="cbtpplato" name="cbtpplato" class="form-control" >
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
                        <button type="button" onclick="plato_mod(<?php echo $idplato;?>);" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Modificar</span></button>
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

