<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idmenu= $_GET['idmenu'];	
	
	$query = "SELECT @a:=@a+1, plato.Nombre,cantidad,estado FROM (SELECT @a:=0)r,`dt_menu` INNER JOIN plato on plato.Id_Plato=dt_menu.Id_plato where `IdMenu`=$idmenu";	
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
		
?>

<form id="form_vermenu_mod" name="form_vermenu_mod" class="form-vertical">
    <div class="panel panel-warning">
	<div class="panel-heading">
            <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Menu</span> 
	</div>
	<div class="panel-body">
						
			<table class="table table-striped table-hover">	
                        <tr align="center">
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Cantidad</td>
                                                  
                        </tr>
                         <?php
                          
                            while ($row1 = mysql_fetch_array($result)) { ?>
                           
                            <tr align="center">
                                <td><h5><?php echo $row1[0]; ?></h5></td>
                                <td><h5><?php echo $row1[1]; ?></h5></td>
                                <td><h5><?php echo $row1[2]; ?></h5></td>
                                
                            </tr>				
                        <?php } ?>
                    </table>			
		</div>
		
	</div>

</form>


<?php
	}else{
	header('Location: ../../index.php'); 
}
?>

