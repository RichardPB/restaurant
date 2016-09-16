
    <div class="panel-body">
       	    <form id="form_persona_list2" name="form_persona_list2" action="cliente/cliente_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar cliente&nbsp</span></span>
		    <input type="text" name="txtbuscarpersonaCA" id="txtbuscarpersonaCA" class="form-control" placeholder="Ingrese nombre">
				
		</div>
                
		</br>
		<div id="subcontenido3">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarpersonaCA').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido3","cliente/cliente_list_activar_1.php?q="+$("#txtbuscarpersonaCA").val());
   }
</script>