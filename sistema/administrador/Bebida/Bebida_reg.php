<?php
	session_start();
	if(isset($_SESSION['persona'])){
          
?>

<form id="form_bebida_reg" name="form_bebida_reg" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Bebida</span> 
	</div>
	<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
                           
                                <input type="text"  name="txtBebida" id="txtBebida" class="form-control"  placeholder="ingrese nombre de bebida" >
			       
                        </div>
                    <br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Tipo Bebida&nbsp</span></span>
                                 <input type="hidden"  name="txtidtipo" id="txtidtipo" class="form-control" >
                                <input type="text" style="width:265px"  name="txttipo" id="txttipo" class="form-control"  placeholder="Seleccione tipo de bebida" disabled="true">
			        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bebidatipo"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                        
                        </div>	
			<br>
						
				<button type="button" onclick="Bebida_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
    </div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

