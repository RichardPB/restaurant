
    <div class="panel-body">
       	    <form id="form_persona_list1" name="form_persona_list1" action="persona/persona_actcan.php" method="post">
		<div class="input-group">
	            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar persona&nbsp</span></span>
		    <input type="text" name="txtbuscarpersonaAC" id="txtbuscarpersonaAC" class="form-control" placeholder="Ingrese nombre">
				
		</div>
                
		</br>
		<div id="subcontenido2">
		</div>
                
	    </form>
	
    </div>

<script>
    $(document).ready(function(e){
        mostrarDatos();
        $('#txtbuscarpersonaAC').keyup(function(e){
            mostrarDatos();
        });
        
   });
   function mostrarDatos(){
       load_div("subcontenido2","persona/persona_list_1.php?q="+$("#txtbuscarpersonaAC").val());
   }
</script>