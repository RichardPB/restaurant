<?php
	session_start();
	if(isset($_SESSION['persona'])){
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
              
         $query1 = "select  * FROM dtpedido";
        $result1 = mysql_query($query1, $cnn) or die("Error de conexion");
        $cantidad1 = is_resource($result1) ? mysql_num_rows($result1) : 0;
        
        $query2 = "SELECT * FROM `v_mesa` WHERE `idmesa`='".$_GET['q']."'";
        $result2 = mysql_query($query2, $cnn) or die("Error de conexion");
         $fil1 = mysql_fetch_array($result2);
        
?>

<form id="form_pedido_reg" name="form_pedido_reg" class="form-vertical" >
    <div class="panel panel-warning">
	<div class="panel-heading">
            <center>
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Registro Pedido</span> 
	    </center>
        </div>
	<div class="panel-body">
                      
            
               <div style="float: left; width: 53%" class="panel panel-danger">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Pedido</span> 
                    </center>
                </div>
                <div class="panel-body">
                    
                     <div class="input-group">
		        <span class="input-group-addon"><span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Plato&nbsp</span></span>
                       <input type="hidden"  name="txtid" id="txtid" class="form-control">
                        <input type="hidden"  name="txtidplato" id="txtidplato" class="form-control">
                        <input type="text"  style="width:68%" name="txtplato" id="txtplato" class="form-control" placeholder="Seleccione plato" disabled="true">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#menupedido"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Menu&nbsp;</span></button>
                     </div>
                        <br>
                     <div class="input-group">
			 <span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true">&nbsp;Cantidad</span></span>
                         <input type="text"  name="txtplacan" id="txtplacan"  style="width:66%" class="form-control"  disabled="true" >
			 
                         
                         <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cartapedido"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Pedido&nbsp;</span></button>
                         
                     </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;Precio</span></span>
                         <input type="text"  name="txtprecio" id="txtprecio"  style="width:29%" class="form-control"   disabled="true">
                        
                        <button type="button" onclick="agregar_pedido();" class="btn btn-success" ><span class="glyphicon glyphicon-chevron-down" aria-hidden="true">&nbsp;Agregar&nbsp;</span></button>
                   &nbsp;
                        <button type="button" onclick="eliplato_eli();" class="btn btn-danger" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true">&nbsp;Eliminar&nbsp;</span></button>
                    
                        </div>
                   
                    <br>
                    <div class="panel panel-warning">
                    <table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Cod</td>
                            <td>Nombre</td>
                            <td>Cantidad</td>
                            <td>Monto</td>
                             <td>Elim.</td>
                      
                        </tr>
                         <?php
                            if($cantidad1>0){
                                $contador=1;
                            while ($row1 = mysql_fetch_array($result1)) { ?>
                           
                            <tr align="center">
                                <td><h5><?php echo $contador; ?></h5></td>
                                <td><h5><?php echo $row1[3]; ?></h5></td>
                                <td><h5><?php echo $row1[4]; ?></h5></td>
                                <td><h5><?php echo $row1[5]; ?></h5></td>
                                <td><Input type="checkbox" class="form-control input-sm"  name="carta" value="<?php echo $row1[0];?>"/></td>
                            </tr>				
                        <?php $contador++;}} ?>
                    </table>

                    </div>
             </div>
            </div>
                           <div style="float: left; width: 47%" class="panel panel-success">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Datos del cliente</span> 
                    </center>
                </div>
                <div class="panel-body">
                    <div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbspMozo</span></span>
                        <input type="hidden"  name="txtidempleado" id="txtidempleado" class="form-control" value="<?php echo $_SESSION['idempleado'];?>">
                        <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control"  value="<?php echo $_SESSION['nombre'].' '.$_SESSION['ape_paterno'];?>" disabled="true">
			       
                    </div>
                                                                   
                    <br>
                    
                    <div class="input-group">
		    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
                    <input type="date"  name="txtfecha" id="txtfecha" class="form-control"  >
		    </div>
                    <br>
                    <div class="input-group">
		    <span class="input-group-addon"><span class="glyphicon glyphicon-hdd" aria-hidden="true">&nbsp;Mesa&nbsp</span></span>
                    <input type="hidden"  name="txtidmesa" id="txtidmesa" class="form-control" value="<?php echo $fil1[0];?>">
                    <input type="text"  name="txtmesa" id="txtmesa" class="form-control" value="<?php echo $fil1[5];?>" >
		    </div>
                    
                </div>
                    
                </div>
            		
        </div>
        <footer>
             <button type="button" onclick="pedido_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Cerrar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
			
		 </footer>
        <br>
    </div>
   
</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

