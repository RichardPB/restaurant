
    <div class="panel-body">
       	    <form id="form_TipoBebida_list1" name="form_Bebida_list1" action="carta/carta_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Plato&nbsp</span></span>
		    <input type="text" name="txtbuscarBebidaAC" id="txtbuscarBebidaAC" class="form-control" placeholder="Ingrese el nombre del plato">
				
		</div>
                
		</br>
		<div id="subcontenido2">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarBebidaAC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido2","carta/carta_list_1.php?q="+$("#txtbuscarBebidaAC").val());
   }
</script>