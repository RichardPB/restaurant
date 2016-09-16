<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idpersona= $_GET['idpersona'];	
	
	$query = "select * from v_cliente1 where Idcliente=$idpersona";
			
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        
        
        $query1 = "select * from cliente where Idcliente=$idpersona";
			
	$result1=mysql_query($query1, $cnn) or die("Error en la conexion");
	$row1= mysql_fetch_array($result1);
  
        
?>



<form id="form_cliente_mod" name="form_cliente_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Cliente</span> 
		</div>
            		
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
				<input type="hidden"  name="txtidcliente" id="txtidcliente" class="form-control" value="<?php echo $row1[1];?>">
                     
                                <input type="text"  style="width:72%" name="txtcliente" id="txtcliente" class="form-control" placeholder="Seleccione Cliente" disabled="true" value="<?php echo $row[1];?>">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#listarpersonad" ><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Cliente&nbsp;</span></button>
                   </div>
			<br>
			
								
                        <button type="button" onclick="cliente_modificar('<?php echo $idpersona;?>');" class="btn btn-info" style="width:200px;"><span  aria-hidden="true" >&nbsp;Actualizar</span></button>
		
			
						
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

