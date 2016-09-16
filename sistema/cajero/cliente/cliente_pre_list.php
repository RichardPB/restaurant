<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>

<div id="main">
</br>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Clientes </span> 
		</div>
							
		<div class="panel-body">
                     <div id="sub1">
			<form id="form_persona_list" name="form_persona_list" action="persona/persona_actcan.php" method="post">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Cliente&nbsp</span></span>
					<input type="text" name="txtbuscarpersona" id="txtbuscarpersona" class="form-control" placeholder="Ingrese nombre">
					
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
		<a data-toggle="modal" data-target="#persona" onclick="load_div('modal_persona', 'cliente/cliente_reg.php');" style="cursor:pointer"><img src="../../imagenes/registrar.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a data-toggle="modal" data-target="#listarpersonac" onclick="load_div('lista_personac', 'cliente/cliente_listar.php?q='+$('#txtbuscarpersona' ).val());" style="cursor:pointer"><img src="../../imagenes/LISTAR_USUARIO.jpg" alt="Img"></a>
	</div>
	<div class="section">
		<a onclick="load_div('sub1', 'cliente/cliente_list.php');" style="cursor:pointer"><img src="../../imagenes/CANCELAR_PERSONA.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a onclick="load_div('sub1', 'cliente/cliente_list_activar.php');" style="cursor:pointer"><img src="../../imagenes/ACTIVAR_PERSONA.jpg" alt="Img"></a>
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
	$('#txtbuscarpersona').keyup(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	load_div("subcontenido", "cliente/cliente_listar_1.php?q="+$("#txtbuscarpersona" ).val());
}
</script>


<?php
}else{
	header('Location: ../../index.php'); 
}
?>