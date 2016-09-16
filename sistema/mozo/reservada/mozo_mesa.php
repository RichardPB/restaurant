<?php
	                       
            require_once("../../../conexion/conexion.php");
	    $cnn=conectar();
            
            $query = "SELECT * FROM `v_mesa` WHERE `piso1`='".$_GET['q']."' AND `estado`='Reservada'";
           
	$result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<br>
<div class="panel panel-warning">
    
  <table class="table table-striped table-hover">	
	  <tr align="center">
			
                <td>LADO IZQUIERDO</td>
		<td>LADO CENTRO</td>	
                <td>LADO DERECHO</td>	
          
	  </tr>
         
           		
		  <tr align="center">
                      <td><h5>
                               <?php while ($row = mysql_fetch_array($result)) { ?>
                          <?php if( $row[2]=='Izquierda'){echo "<button class='btn btn-primary'  style='width:200px;'>NUMERO MESA:<br>".$row[5]."<br>TIPO DE MESA : ".$row[3]."<br>CAPACIDAD : ".$row[1]."</button><br><br>";}; ?>
                            <?php } ?>
                          </h5></td>
		      <td><h5>
                              <?php
                               $query = "SELECT * FROM `v_mesa` WHERE `piso1`='".$_GET['q']."' AND `estado`='Reservada'";
           
	                        $result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
                              while ($row = mysql_fetch_array($result)) { ?>
                          <?php if( $row[2]=='Centro'){echo "<button class='btn btn-info'  style='width:200px;'>NUMERO MESA:<br>".$row[5]."<br>TIPO DE MESA : ".$row[3]."<br>CAPACIDAD : ".$row[1]."</button><br><br>";}; ?>
                            <?php } ?>
                          </h5></td>
                      <td><h5>
                              <?php
                               $query = "SELECT * FROM `v_mesa` WHERE `piso1`='".$_GET['q']."' AND `estado`='Reservada'";
           
	                        $result = mysql_query($query, $cnn) or die(" ERROR DE CONEXION");
                              
                              while ($row = mysql_fetch_array($result)) { ?>
                          <?php if( $row[2]=='Derecha'){echo "<button class='btn btn-danger'  style='width:200px;'>NUMERO MESA:<br>".$row[5]."<br>TIPO DE MESA : ".$row[3]."<br>CAPACIDAD : ".$row[1]."</button><br><br>";}; ?>
                         <?php } ?>
                          </h5></td>
                               	
		  </tr>				
	
	
                
</table>
       
</div>
<?php

   }  
?>
