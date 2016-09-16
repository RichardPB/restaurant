    <div class="panel-body">
       	    <form id="form_mesa_list2" name="form_mesa_list2" action="plato/plato_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Plato&nbsp</span></span>
		    <input type="text" name="txtbuscarBebidaCA" id="txtbuscarBebidaCA" class="form-control" placeholder="Ingrese nombre de plato">
				
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
       load_div("subcontenido3","plato/plato_list_activar_1.php?q="+$("#txtbuscarBebidaCA").val());
   }
</script>