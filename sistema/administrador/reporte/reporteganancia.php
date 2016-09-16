<?php
	                       
            require_once("../../../conexion/conexion.php");
	    $cnn=conectar();
            
            $query = "SELECT v_cliente1.nombre,Total FROM `pago` INNER JOIN v_cliente1 on v_cliente1.IdCliente=pago.cliente_id where Date_format(fecha,'%Y-%m-%d')='".$_GET['q']."'";
	   $result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
	   $cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
           
              $query1 = "SELECT SUM(Total) FROM `pago`INNER JOIN v_cliente1 on v_cliente1.IdCliente=pago.cliente_id where Date_format(fecha,'%Y-%m-%d')='".$_GET['q']."'";
	       $result1 = mysql_query($query1, $cnn) or die(" ERROR DE CONEXION");
	      $row1= mysql_fetch_array($result1);
	  if($cantidad>0){
              
              
             
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<br>

    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>Codigo</td>
		<td>Cliente</td>	
                <td>Monto</td>
               
                
          
	  </tr>
         
           <?php 
           if($cantidad>0){
               $contador=1;
          while ($row = mysql_fetch_array($result)) { ?>		
		  <tr align="center">
                               <td><h5><?php echo $contador; ?></h5></td>
                               <td><h5><?php echo $row[0]; ?></h5></td>
                                <td><h5><?php echo $row[1]; ?></h5></td>
                                 </tr>				
           <?php $contador++;}} ?> 	    		
	 <tr align="center">
			
             <td colspan="2"><h4><b>TOTAL DE DINERO RECAUDADO</b></h4></td>
             <td><h4><b><?PHP echo $row1[0];?></b></h4></td>
               
                
          
	  </tr>
	
                
</table>


<?php

   }  
?>
