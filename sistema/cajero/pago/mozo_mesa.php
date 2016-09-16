<?php
	                       
            require_once("../../../conexion/conexion.php");
	    $cnn=conectar();
            
            $query = "SELECT * FROM `v_pago` WHERE `piso1`='".$_GET['q']."' AND `estado`='Ocupado'";
           
	$result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<br>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
		<td>Mesa</td>	
                <td>Empleado</td>
                 <td>Fecha</td>
                <td>Ver</td>
                <td>Pagar</td>
          
	  </tr>
         
           <?php 
           if($cantidad>0){
               $contador=1;
          while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                               <td><h5><?php echo $contador; ?></h5></td>
                               <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
                                <td><h5><?php echo $row[3]; ?></h5></td>
				 <td>
                                     <a data-toggle="modal"  data-target="#ver" class="btn btn-primary" onclick="load_div('ver_pedido', 'pago/menu_reg.php?idcarta='+<?php echo $row[0]; ?>);" style="cursor:pointer">
                                         <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"> Ver&nbsp;&nbsp;&nbsp;&nbsp;</span></a></td>
                                     <td><a data-toggle="modal"  data-target="#ver" class="btn btn-danger" onclick="load_div('ver_pedido', 'pago/menu_pago.php?idcarta='+<?php echo $row[0]; ?>);" style="cursor:pointer">
                                             <span class="glyphicon glyphicon-usd" aria-hidden="true"> Pagar&nbsp; &nbsp; </span></td></a></td>
		  </tr>				
           <?php $contador++;}} ?> 	    		
	
	
                
</table>
       
</div>
<script>
function myFunction(a) {
    load_div('modal_menu', 'libre/menu_reg.php?q='+a);
}
</script>
<?php

   }  
?>
