<?php
	                       
            require_once("../../../conexion/conexion.php");
	    $cnn=conectar();
            
            $query = "SELECT bebidas.Nombre,Sum(Cantidad),sum(`pedido_subtotal`) FROM `dt_pedido` inner JOIN carta on carta.carta_id=dt_pedido.IdCarta INNER join bebidas on bebidas.Id_Bebidas=carta.bebida_id GROUP by bebidas.Nombre, cantidad DESC limit 10";
           
	$result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<br>
<div class="panel panel-danger">
    <div class="panel-heading">
        <center>
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Rankig de las 10 bebidas mas vendidas</span> 
        </center>
    </div>
    <div class="panel-body">
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
		<td>Bebida</td>	
                <td>Cantidad</td>
                 <td>Monto Generado</td>
                
          
	  </tr>
         
           <?php 
           if($cantidad>0){
               $contador=1;
          while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                               <td><h5><?php echo $contador; ?></h5></td>
                               <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                <td><h5><?php echo $row[2]; ?></h5></td>
				 		  </tr>				
           <?php $contador++;}} ?> 	    		
	
	
                
</table>
     </div>  
</div>
<script>
function myFunction(a) {
    load_div('modal_menu', 'libre/menu_reg.php?q='+a);
}
</script>
<?php

   }  
?>
