    <div class="panel-body">
       	    <form id="form_empleado_list2" name="form_empleado_list2" action="empleado/empleado_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar empleado&nbsp</span></span>
		    <input type="text" name="txtbuscarempleadoCA" id="txtbuscarempleadoCA" class="form-control" placeholder="Ingrese nombre" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido3">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarempleadoCA').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido3","empleado/empleado_list_activar_1.php?q="+$("#txtbuscarempleadoCA").val());
   }
</script>