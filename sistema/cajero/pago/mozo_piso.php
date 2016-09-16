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
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">Seleccionar Piso</span> 
                         </center>
		</div>
		
                 <?php while ($row = mysql_fetch_array($result)){ ?>		
               		
                <div >
                    <button  class="btn btn-info"  style="width:200px; float: left"  onclick="load_div('mesa', 'pago/mozo_mesa.php?q=<?php echo $row[1]; ?>');" ><?php echo $row[0]; ?></button>
                </div>
                <?php } ?>
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