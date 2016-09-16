<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
            $combog = mysql_query("SELECT * FROM TIPODOCUMENTO WHERE ESTADO=1",$cnn);
?>

<form id="form_cliente_reg" name="form_cliente_reg" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Cliente</span> 
		</div>
		
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
				<input type="hidden"  name="txtidcliente" id="txtidcliente" class="form-control">
                     
                        <input type="text"  style="width:72%" name="txtcliente" id="txtcliente" class="form-control" placeholder="Seleccione Cliente" disabled="true">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#listarpersonab" ><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Cliente&nbsp;</span></button>
                     </div>
			
			
			<br>
						
				<button type="button" onclick="cliente_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
	</div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

