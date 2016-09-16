<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idTipoBebida= $_GET['idTipoBebida'];	
	
	$query = "SELECT * from tipo_bebidas where id_tipobebidas=$idTipoBebida";
			
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        $id=$row[0];
	$nombre=$row[1];
	
	
?>

<form id="form_TipoBebida_mod" name="form_TipoBebida_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Tipo de Bebida</span> 
		</div>
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
                              <input type="hidden"  name="txtidTipoBebida" id="txtidTipoBebida" class="form-control" value="<?php echo $id; ?>">
                                <input type="text"   name="txtTipoBebida" id="txtTipoBebida" class="form-control" value="<?php echo $nombre; ?>" placeholder="Seleccione a la persona" >
			       
                        </div>
				
			<br>
						
				<button type="button" onclick="TipoBebida_mod();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
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

