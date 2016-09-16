<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
         if(isset($_POST['idmenu'])){
             $idmenu= $_POST['idmenu'];
             $query = "SELECT * from menu where menu_id=$idmenu";	
	$result=mysql_query($query, $cnn) or die($query);
        }else{
            
            $idmenu= $_GET['idmenu'];
            $query = "SELECT * from menu where menu_id=$idmenu";	
	$result=mysql_query($query, $cnn) or die($query);
        }
	
	
	$row= mysql_fetch_array($result);
     	$query1 = "SELECT @a:=@a+1, plato.Nombre,cantidad,estado,`dtmenu_id` FROM (SELECT @a:=0)r,`dt_menu` INNER JOIN plato on plato.Id_Plato=dt_menu.Id_plato where `IdMenu`=$idmenu";
        $result1 = mysql_query($query1, $cnn) or die("Error de conexion");
        $cantidad1 = is_resource($result1) ? mysql_num_rows($result1) : 0;
?>

<form id="form_menu_mod" name="form_menu_mod" class="form-vertical" >
    <div class="panel panel-warning">
	<div class="panel-heading">
            <center>
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Editar Menu</span> 
	    </center>
        </div>
	<div class="panel-body">
 
            
               <div style="float: left; width: 53%" class="panel panel-danger">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Plato</span> 
                    </center>
                </div>
                <div class="panel-body">
                    
                     <div class="input-group">
		        <span class="input-group-addon"><span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Plato&nbsp</span></span>
                        <input type="hidden"  name="txtidplato" id="txtidplato" class="form-control">
                        <input type="text"  style="width:64%" name="txtplato" id="txtplato" class="form-control" placeholder="Seleccione plato" disabled="true">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#platomenumod"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Seleccionar</span></button>
                     </div>
                        <br>
                     <div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true">&nbsp;Cantidad&nbsp</span></span>
                        <input type="text"  name="txtplacan" id="txtplacan" class="form-control"   >
			       
                    </div>
                        <br>
                        <button type="button" onclick="modplato_mod(<?php echo $idmenu; ?>);" class="btn btn-success" ><span class="glyphicon glyphicon-chevron-down" aria-hidden="true">&nbsp;Agregar&nbsp;</span></button>
                    <button type="button" onclick="modplato_eliminar(<?php echo $idmenu; ?>);" class="btn btn-danger" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true">&nbsp;Eliminar&nbsp;</span></button>
                    <br>
                    <br>
                    <div class="panel panel-warning">
                    <table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Cantidad</td>
                            <td>Eliminar</td>
                      
                        </tr>
                         <?php
                            if($cantidad1>0){
                            while ($row1 = mysql_fetch_array($result1)) { ?>
                           
                            <tr align="center">
                                <td><h5><?php echo $row1[0]; ?></h5></td>
                                <td><h5><?php echo $row1[1]; ?></h5></td>
                                <td><h5><?php echo $row1[2]; ?></h5></td>
                                <td><Input type="checkbox" class="form-control input-sm"  name="carta" value="<?php echo $row1[4];?>"/></td>
                            </tr>				
                        <?php }} ?>
                    </table>

                    </div>
             </div>
            </div>
                           <div style="float: left; width: 47%" class="panel panel-success">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Descripcion</span> 
                    </center>
                </div>
                <div class="panel-body">
                    <div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Descripcion</span></span>
                        <input type="text"  name="txtdescripcion" id="txtdescripcion" class="form-control"  value="<?php echo $row[1];?>" >
			       
                    </div>
                    
	            <br>
                    
                    <div class="input-group">
		    <span class="input-group-addon"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;Precio&nbsp</span></span>
                    <input type="text"  name="txtprecio" id="txtprecio" class="form-control"  value="<?php echo $row[4];?>" >
	            </div>
                                          
                    <br>
                    
                    <div class="input-group">
		    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
                    <input type="date"  name="txtfecha" id="txtfecha" class="form-control"  value="<?php echo $row[3];?>" >
		    </div>
                    
                </div>
                    
                </div>
            		
        </div>
        <footer>
             <button type="button" onclick="menu_mod(<?php echo $row[0];?>);" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Actualizar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Cerrar&nbsp;&nbsp;&nbsp;&nbsp;</span></button>
			
		 </footer>
        <br>
    </div>
   
</form>
<script>
	function select(id, nombre) {
		$('#txtidplato').val(id);
		$('#txtplato').val(nombre);
		
	}
</script>

<?php
	}else{
	header('Location: ../../index.php'); 
}
?>

