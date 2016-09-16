
    <div class="panel-body">
       	    <form id="form_empleado_list1" name="form_empleado_list1" action="empleado/empleado_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar empleado&nbsp</span></span>
		    <input type="text" name="txtbuscarempleadoAC" id="txtbuscarempleadoAC" class="form-control" placeholder="Ingrese nombre" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido2">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarempleadoAC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido2","empleado/empleado_list_1.php?q="+$("#txtbuscarempleadoAC").val());
   }
</script>