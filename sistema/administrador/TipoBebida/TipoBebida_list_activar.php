    <div class="panel-body">
       	    <form id="form_TipoBebida_list2" name="form_TipoBebida_list2" action="TipoBebida/TipoBebida_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar tipo de bebida&nbsp</span></span>
		    <input type="text" name="txtbuscarTipoBebidaCA" id="txtbuscarTipoBebidaCA" class="form-control" placeholder="Ingrese el Tipo de Bebida a buscar" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido3">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarTipoBebidaCA').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido3","TipoBebida/TipoBebida_list_activar_1.php?q="+$("#txtbuscarTipoBebidaCA").val());
   }
</script>