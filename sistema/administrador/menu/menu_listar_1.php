<?php
	session_start();
	if(isset($_SESSION['persona'])){
		
	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM menu where menu_fecha like '".$_GET['q']."%' LIMIT 6";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
        
	if($cantidad>0){
?>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
                <td>Descripcion</td>
                <td>Fecha</td>
		<td>Precio</td>
		<td>Estado</td>
                <td>Opcion</td>
               
            
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                                <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[3]; ?></h5></td>
				<td><h5><?php echo $row[4]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
                                <td><a data-toggle="modal"  data-target="#vermenu" class="btn btn-info" onclick="load_div('ver_menu', 'menu/ver_menu.php?idmenu='+<?php echo $row[0]; ?>);" style="cursor:pointer">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true">&nbsp;Ver&nbsp;&nbsp;</span></a></td>
                  </tr>				
	  <?php } ?>
                  
	</table>
       
</div>
	
	
<?php
 
 } 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>