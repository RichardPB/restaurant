<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
        
?>

<form id="form_carta_reg" name="form_carta_reg" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Carta</span> 
	</div>
	<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                <input type="hidden"  name="txtidplato" id="txtidplato" class="form-control">
                                 <input type="hidden"  name="txttp" id="txttp" class="form-control">
                                <input type="text"  style="width:73%" name="txtpersona" id="txtpersona" class="form-control" placeholder="Seleccione plato o bebida" disabled="true">
			        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#platocarta"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Plato&nbsp;&nbsp;</span></button>
                        </div>
                    <br>
			  <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Descripcion</span></span>
                           
                                <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control"  placeholder="ingrese descripcion del plato" >
			       
                        </div>
			
                        
			<br>
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;Precio&nbsp</span></span>
                           
                                <input type="text"  name="txtprecio" id="txtprecio" class="form-control"  placeholder="ingrese precio del plato" >
			       
                        </div>
                        <br>
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true">&nbsp;Stock&nbsp</span></span>
                           
                                <input type="text"  name="txtstock" id="txtstock" class="form-control"  placeholder="ingrese stock de plato" onkeypress="return soloNumeros(event)>
			       
                        </div>
                        <br>
                           <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
                           
                                <input type="date"  name="txtfecha" id="txtfecha" class="form-control"   >
			       
                        </div>
                        <br>
				<button type="button" onclick="carta_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar&nbsp;</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar&nbsp;</span></button>
			
						
		</div>
		
    </div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

