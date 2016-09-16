<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<div id="main">
</br>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos a la Carta</span> 
		</div>
							
		<div class="panel-body">
                    <div id="sub1">
			<form id="form_bebida_list" name="form_bebida_list" >
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Plato&nbsp</span></span>
					<input type="text" name="txtbuscarbebida" id="txtbuscarbebida" class="form-control" placeholder="Ingrese el nombre">
					
				</div>
				</br>
				<div id="subcontenido">
				</div>
			</form>
			</div>
		</div>
	</div>
				
</div>
<div id="sidebar" >
<br>
	<div class="section">
		<a class="btn btn-success" style="width: 267px; height: 58px;" ><font size=5>Adm. <?php echo $_SESSION['persona']."</b>";?>&nbsp;&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true"></span></font></a>
	</div>
	<div class="section">
		<a data-toggle="modal" data-target="#persona" onclick="load_div('modal_persona', 'carta/carta_reg.php');" style="cursor:pointer"><img src="../../imagenes/registrar.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a data-toggle="modal" data-target="#listarcarta" onclick="load_div('lista_carta', 'carta/carta_listar.php?q='+$('#txtbuscarbebida' ).val());" style="cursor:pointer"><img src="../../imagenes/LISTAR_USUARIO.jpg" alt="Img"></a>
	</div>
	<div class="section">
		<a onclick="load_div('sub1', 'carta/carta_list.php');" style="cursor:pointer"><img src="../../imagenes/CANCELAR_PERSONA.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a onclick="load_div('sub1', 'carta/carta_list_activar.php');" style="cursor:pointer"><img src="../../imagenes/ACTIVAR_PERSONA.jpg" alt="Img"></a>
	</div>
					
	<div class="section">
		<img src="../../imagenes/ctexto.jpg" alt="Img">
	</div>
	<div class="section">
		<img src="../../imagenes/logo2.jpg" alt="Img">
	</div>
</div>

<script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtbuscarbebida').keyup(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	load_div("subcontenido", "carta/carta_listar_1.php?q="+$("#txtbuscarbebida" ).val());
}
</script>




<!--<script>
$("#txtbuscarusuario" ).keyup(function(event) {
	load_div("subcontenido", "usuario/usuario_list.php?q="+$("#txtbuscarusuario" ).val());
});
</script>

<?php
}else{
	header('Location: ../../index.php'); 
}
?>