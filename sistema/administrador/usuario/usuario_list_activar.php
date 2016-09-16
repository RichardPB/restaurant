
    <div class="panel-body">
        
	    <form id="form_usuario_list2" name="form_usuario_list2" action="usuario/usuario_cancelar.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de usuario&nbsp</span></span>
		    <input type="text" name="txtbuscarusuarioCC" id="txtbuscarusuarioCC" class="form-control" placeholder="Ingrese el usuario a buscar" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido3">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarusuarioCC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido3","usuario/usuario_list_activar_1.php?q="+$("#txtbuscarusuarioCC").val());
   }
</script>