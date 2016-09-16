<?php
	session_start();
	if(isset($_SESSION['persona'])){
                        
            require_once("../../../conexion/conexion.php");
	    $cnn=conectar();
            
            $query = "SELECT DISTINCT `piso`,piso1 FROM `v_mesa`";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<div>
</br>
	<div class="panel panel-warning">
		<div class="panel-heading">
                    <center>
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">Reportes</span> 
                         </center>
		</div>
		
                	
               		
                <div >
                    <button  class="btn btn-info"  style="width:200px; float: left"  onclick="load_div('mesa', 'reporte/plato.php');" >Platos mas vendidos</button>
                </div>
             <div >
                    <button  class="btn btn-danger"  style="width:200px; float: left"  onclick="load_div('mesa', 'reporte/bebida.php');" >Bebidas mas consumidas</button>
                </div>
                  <div >
                    <button  class="btn btn-primary"  style="width:200px; float: left"  onclick="load_div('mesa', 'reporte/ganancia.php');" >Ganancias del dia</button>
                </div>
           
               
	</div>
				
</div>
<div id="mesa">
    
</div>

<?php
}else{
	header('Location: ../../index.php'); 
}
        }
?>