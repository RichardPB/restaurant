<?php
	session_start();
	if(isset($_SESSION['persona'])){
          
?>

<form id="form_tipobebida_reg" name="form_tipobebida_reg" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro Tipo de Bebida</span> 
	</div>
			
	<div class="panel-body">				
	    <div class="input-group">
		<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
		<input type="text" name="txtnombre" id="txtnombre" class="form-control" placeholder="Ingrese su Nombre">
	    </div>                		
	    <br>
	    <button type="button" onclick="tipobebida_reg();" class="btn btn-primary" >
                <span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span>
            </button>
	    &nbsp;&nbsp;
            <button type="button" class="btn btn-info" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span>
            </button>
			
						
	</div>
		
    </div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

