
    <div class="panel-body">
       	    <form id="form_usuario_list1" name="form_usuario_list1" action="usuario/usuario_cancelar.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de usuario&nbsp</span></span>
		    <input type="text" name="txtbuscarusuarioAC" id="txtbuscarusuarioAC" class="form-control" placeholder="Ingrese el usuario a buscar" onkeypress="return soloLetras(event)">
				
		</div>
                
		</br>
		<div id="subcontenido2">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarusuarioAC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido2","usuario/usuario_list_1.php?q="+$("#txtbuscarusuarioAC").val());
   }
</script>