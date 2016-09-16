<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
           $combog = mysql_query("SELECT * FROM tipocuenta WHERE ESTADO=1",$cnn);
?>

<form id="form_empleado_reg" name="form_empleado_reg" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Empleado</span> 
		</div>
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
                                <input type="hidden"  name="txtidpersona" id="txtidpersona" class="form-control">
                                <input type="text"  style="width:290px" name="txtpersona" id="txtpersona" class="form-control" placeholder="Seleccione a la persona" disabled="true">
			       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#empleadopersona"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                        </div>
					
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha de Nacimiento</span></span>
                                <input type="date" name="txtfecnac" id="txtfecnac" class="form-control">
			</div>
			<br>
			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp;&nbsp;&nbsp;Cargo&nbsp;&nbsp;</span></span>
				<select id="cbtpcuenta" name="cbtpcuenta" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                         <?PHP  while($sql_p = mysql_fetch_row($combog))
                                        {
                                         $salida.= "<option value='".$sql_p[0]."'>".$sql_p[1]."</option>";
                                        } 
                                        echo $salida;
                                        ?>
					
				</select>
			</div>
			<br>
						
				<button type="button" onclick="empleado_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
	</div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

