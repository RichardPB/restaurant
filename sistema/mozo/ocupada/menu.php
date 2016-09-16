<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	// echo"<script type=\"text/javascript\">alert('".$_GET['q']."');</script>" ;
       $query = "select  * FROM v_segundo ";
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
        
        
        $query1 = "select  * FROM v_entrada ";
	$result1 = mysql_query($query1, $cnn) or die("Error en la conexion");
	$cantidad1 = is_resource($result1) ? mysql_num_rows($result1) : 0;
        
         $query2 = "select  * FROM v_postre ";
	$result2 = mysql_query($query2, $cnn) or die("Error en la conexion");
	$cantidad2 = is_resource($result2) ? mysql_num_rows($result2) : 0;
	
 ?>
<script language=JavaScript>

document.form_menupedido_reg.txtcantidad3.value = "";
document.form_menupedido_reg.txtcantidad2.value = "";
document.form_menupedido_reg.txtcantidad1.value = "";

</script>

<form id="form_menupedido_reg" name="form_menupedido_reg" class="form-vertical" >
<div >
	
                <div style="float: left; width: 50%" class="panel panel-default">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Entrada</span> 
                    </center>
                </div>
                <div class="panel-body">
                    
                    <div class="panel panel-warning">
                    <table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Cod.</td>
                            <td>Nombre</td>
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
                                <td style="width:20%"><h5><?php echo $row1[3]; ?></h5></td>
                                <td style="width:20%"><input type="number"  name="txtcantidad3"  class="form-control"  min="1" max="<?php echo $row1[3]; ?>" style="width:100%"></td>
                            <input type="hidden"  name="txtposicion3"  class="form-control" value="<?php echo $row1[4]; ?>">
                            </tr>				
                        <?php $contador++;}} ?>
                        
                    </table>
                    </div>
                    
                </div>
                </div>
               <div style="float: left; width: 50%" class="panel panel-info">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Segundo</span> 
                    </center>
                </div>
                <div class="panel-body">
                    
                    <div class="panel panel-warning">
                    <table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Cod.</td>
                            <td>Nombre</td>
                             <td>Disponible</td>
                             <td>Cantidad</td>
                            
                        </tr>
                         <?php
                            if($cantidad1>0){
                                $contador=1;
                            while ($row1 = mysql_fetch_array($result1)) { ?>
                           
                            <tr align="center">
                                <td style="width:10%"><h5><?php echo $contador; ?></h5></td>
                                <td style="width:50%"><h5><?php echo $row1[1]; ?></h5></td>
                                <td style="width:20%"><h5><?php echo $row1[3]; ?></h5></td>
                                <td style="width:20%"><input type="number"  name="txtcantidad1"  class="form-control" onclick="select(<?php echo $row1[4]; ?>);" min="1" max="<?php echo $row1[3]; ?>" style="width:100%"></td>
                               <input type="hidden"  name="txtposicion1"  class="form-control" value="<?php echo $row1[4]; ?>">
                            </tr>				
                        <?php $contador++;}} ?>
                    </table>

                    </div>
             </div>
                      
            </div>

            
            </div> 
    </div>
 <div align="center" style="float: left; width: 100%">
    <button type="button" onclick="menu_ped_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
		
</div>

 </form>                   
 	
<?php
      
 }else{
	header('Location: ../../../index.php'); 
}
 ?>
<script>
    
    $('#txtcantidad').on('keyup', function(){

	var valor = $('#txtcantidad').val();
        $('#txtcantidad1').text(valor);
        
 });
</script>
