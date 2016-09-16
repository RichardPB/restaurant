    <div class="panel-body">
       	    <form id="form_mesa_list2" name="form_mesa_list2" action="mesa/mesa_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Mesa&nbsp</span></span>
                    <input type="text" name="txtbuscarBebidaCA" id="txtbuscarBebidaCA" class="form-control" placeholder="Ingrese numero de mesa" onkeypress="return soloNumeros(event)">
				
		</div>
                
		</br>
		<div id="subcontenido3">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarBebidaCA').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido3","mesa/mesa_list_activar_1.php?q="+$("#txtbuscarBebidaCA").val());
   }
</script>