<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idBebida= $_GET['idBebida'];	
	
	$query = "SELECT * from v_bebida where id_bebidas=$idBebida";
			
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        
	$nombre=$row[1];
        $tipo=$row[2];
        
        $query1 = "SELECT * from bebidas where id_bebidas=$idBebida";	
	$result1=mysql_query($query1, $cnn) or die("Error en la conexion");
	$row1= mysql_fetch_array($result1);
	$id=$row1[2];
	
?>

<form id="form_Bebida_mod" name="form_Bebida_mod" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Bebida</span> 
		</div>
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
                           
                                <input type="text"  name="txtBebida" id="txtBebida" class="form-control" value="<?php echo $nombre; ?>" placeholder="Seleccione a la persona" >
			       
                        </div>
                    <br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Tipo Bebida&nbsp</span></span>
                                 <input type="hidden"  name="txtidtipo" id="txtidtipo" class="form-control" value="<?php echo $id; ?>">
                                <input type="text" style="width:265px"  name="txttipo" id="txttipo" class="form-control" value="<?php echo $tipo; ?>" placeholder="Seleccione a la persona" disabled="true" >
			        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bebidatipo"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                        
                        </div>	
			<br>
						
				<button type="button" onclick="Bebida_mod('<?php echo $idBebida;?>');" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
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

