<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
           $combog = mysql_query("SELECT * FROM tipomesa WHERE ESTADO=1",$cnn);
?>

<form id="form_mesa_reg" name="form_mesa_reg" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Mesa</span> 
	</div>
	<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Numero&nbsp</span></span>
                           
                                <input type="text"  name="txtnumero" id="txtnumero" class="form-control"  placeholder="ingrese el numero de mesa" onkeypress="return soloNumeros(event)">
			       
                        </div>
                    <br>
			  <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-align-center" aria-hidden="true">&nbsp;Piso&nbsp;&nbsp;</span></span>
				<select id="cbnivel" name="cbnivel" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                        <option value="1"> Primer Nivel</option>
                                        <option value="2"> Segundo Nivel</option>
                                        <option value="3"> Tercer Nivel</option>
                                         
					
				</select>
			</div>	
			<br>
                        <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-th-large" aria-hidden="true">&nbsp;Tipo Mesa&nbsp;&nbsp;</span></span>
				<select id="cbtpmesa" name="cbtpmesa" class="form-control" >
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
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Capacidad&nbsp</span></span>
                           <select id="cbcapacidad" name="cbcapacidad" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                        <option value="2"> Personas 2</option>
                                        <option value="4"> Personas 4</option>
                                        <option value="6"> Personas 6</option>
                                        <option value="8"> Personas 8</option>
   
				</select>
                        </div>
                        <br>
                        <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-move" aria-hidden="true">&nbsp;Ubicacion&nbsp;&nbsp;</span></span>
				<select id="cbubicacion" name="cbubicacion" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
                                        <option value="1"> Izquierda</option>
                                        <option value="2"> Centro</option>
                                        <option value="3"> Derecha</option>
   
				</select>
			</div>
                      
                        <br>
				<button type="button" onclick="mesa_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
    </div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

