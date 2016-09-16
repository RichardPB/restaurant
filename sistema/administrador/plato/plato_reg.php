<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
           $combog = mysql_query("SELECT * FROM tipo_plato WHERE ESTADO=1",$cnn);
?>

<form id="form_plato_reg" name="form_plato_reg" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Plato</span> 
	</div>
	<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                           
                                <input type="text"  name="txtnombre" id="txtnombre" class="form-control"  placeholder="ingrese nombre de plato" onkeypress="return soloLetras(event)">
			       
                        </div>
                    <br>
			  <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Descripcion&nbsp</span></span>
                           
                                <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control"  placeholder="ingrese descripcion del plato" >
			       
                        </div>
			
                        
			<br>
                       <div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-th-large" aria-hidden="true">&nbsp;Tipo Plato&nbsp;&nbsp;</span></span>
				<select id="cbtpplato" name="cbtpplato" class="form-control" >
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
				<button type="button" onclick="plato_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar&nbsp;</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar&nbsp;</span></button>
			
						
		</div>
		
    </div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

