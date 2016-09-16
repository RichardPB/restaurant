
    <div class="panel-body">
       	    <form id="form_TipoBebida_list1" name="form_TipoBebida_list1" action="TipoBebida/TipoBebida_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar tipo de bebida&nbsp</span></span>
		    <input type="text" name="txtbuscarTipoBebidaAC" id="txtbuscarTipoBebidaAC" class="form-control" placeholder="Ingrese el tipo de bebida a buscar" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido2">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarTipoBebidaAC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido2","TipoBebida/TipoBebida_list_1.php?q="+$("#txtbuscarTipoBebidaAC").val());
   }
</script>