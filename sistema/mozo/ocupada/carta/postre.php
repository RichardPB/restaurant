<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../../conexion/conexion.php");
	$cnn = conectar();
	 $query = "select  * FROM v_carta where tipo_plato='Postres' and carta_estado=1 ";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
       $cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	
 ?>
<form id="form_pedidopostre_reg" name="form_pedidopostre_reg" class="form-vertical" >
<div  class="panel panel-default">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista</span> 
                    </center>
                </div>
                <div class="panel-body">
                    
                    <div class="panel panel-warning">
                    <table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Cod.</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Disponible</td>
                            <td>Cantidad</td>
                        </tr>
                        <?php
                            if($cantidad>0){
                                $contador=1;
                            while ($row1 = mysql_fetch_array($result)) { ?>
                           
                            <tr align="center">
                                <td style="width:10%"><h5><?php echo $contador; ?></h5></td>
                                <td style="width:50%"><h5><?php echo $row1[1]; ?></h5></td>
                                <td style="width:20%"><h5><?php echo $row1[4]; ?></h5></td>
                                <td style="width:20%"><h5><?php echo $row1[6]; ?></h5></td>
                                <td style="width:20%"><input type="number"  name="txtcantidad"  class="form-control"  min="1" max="<?php echo $row1[6]; ?>" style="width:100%"></td>
                                 <input type="hidden"  name="txtposicion"  class="form-control" value="<?php echo $row1[0]; ?>">
                                 <input type="hidden"  name="txtnombre"  class="form-control" value="<?php echo $row1[1]; ?>">
                                 <input type="hidden"  name="txtprecio"  class="form-control" value="<?php echo $row1[4]; ?>">
                            </tr>				
                        <?php $contador++;}} ?>
                        
                    </table>
                    </div>
                    
                </div>
    
    <div align="center">
    <button type="button" onclick="pedido_entrada_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
		
</div>
    <br>
    <br>
                </div>
</form>         
<?php
      
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

