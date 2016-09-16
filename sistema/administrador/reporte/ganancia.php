
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<br>
<div class="panel panel-primary">
    <div class="panel-heading">
        <center>
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Dinero Recaudado del dia</span> 
        </center>
    </div>
    
    <div class="panel-body">
        <div class="input-group">
	    <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
	    <input type="date" name="txtbuscarbebida" id="txtbuscarbebida" class="form-control" placeholder="Ingrese el nombre">
	</div>
        <div class="panel-body">
        <div id="reporte">
    
       </div>
     </div>  
        </div>  
</div>


<script>
    
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtbuscarbebida').change(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	load_div("reporte", "reporte/reporteganancia.php?q="+$("#txtbuscarbebida" ).val());
}
</script>