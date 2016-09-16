<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idcarta= $_GET['idcarta'];	
	
        $query = "SELECT * from carta where carta_id=$idcarta";	
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
        
        if($row[7]==0){
            $query = "SELECT * from v_carta where carta_id=$idcarta";	
            $result=mysql_query($query, $cnn) or die("Error en la conexion");
            $row= mysql_fetch_array($result);
      
            $query1 = "SELECT * from carta where carta_id=$idcarta";	
            $result1=mysql_query($query1, $cnn) or die("Error en la conexion");
            $row1= mysql_fetch_array($result1);
            $platobebida= $row1[1];
            $tp=1;
        }  else {
            $query = "SELECT * from v_carta1 where carta_id=$idcarta";	
            $result=mysql_query($query, $cnn) or die("Error en la conexion");
            $row= mysql_fetch_array($result);

            $query1 = "SELECT * from carta where carta_id=$idcarta";	
            $result1=mysql_query($query1, $cnn) or die("Error en la conexion");
            $row1= mysql_fetch_array($result1);
            $platobebida= $row1[7];
            $tp=2;
        };
        
        
	
	
	
?>

<form id="form_carta_mod" name="form_carta_mod" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Editar Carta</span> 
	</div>
	<div class="panel-body">
           
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                <input type="hidden"  name="txtidplato" id="txtidplato" class="form-control" value="<?php echo $platobebida; ?>">
                                <input type="hidden"  name="txttp" id="txttp" class="form-control">
                           <input type="text"  style="width:300px" name="txtpersona" id="txtpersona" class="form-control" placeholder="<?php echo $row[1]; ?>" disabled="true">
			       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#platocarta"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                        </div>
                    <br>
			  <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Descripcion</span></span>
                           
                                <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control" value="<?php echo $row[3]; ?>" >
			       
                        </div>
			
                        
			<br>
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;Precio&nbsp</span></span>
                           
                                <input type="text"  name="txtprecio" id="txtprecio" class="form-control"  value="<?php echo $row[4]; ?>" >
			       
                        </div>
                        <br>
                        <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true">&nbsp;Stock&nbsp</span></span>
                           
                                <input type="text"  name="txtstock" id="txtstock" class="form-control"  value="<?php echo $row[6]; ?>" onkeypress="return soloNumeros(event)>
			       
                        </div>
                        <br>
                           <div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
                           
                                <input type="date"  name="txtfecha" id="txtfecha" class="form-control"  value="<?php echo $row[7]; ?>" >
			       
                        </div>
                      
                        <br>
                        <button type="button" onclick="carta_mod(<?php echo $idcarta;?>,<?php echo $tp;?>);" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Modificar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
	</div>

</form>


<?php
	}else{
	header('Location: ../../index.php'); 
}
?>

