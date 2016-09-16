<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Restaurant R&Y</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="../../js/js_funciones.js" ></script>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>

<body>

<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <span class="label label-default">
                       <img src="../../imagenes/logo.jpg" width="40px" height="40x"> 
                  Restaurant R&Y
					</span>
                </li>
                <li>
				<a data-toggle="modal"  data-target="#personamod" onclick="load_div('modal_persona_mod', 'perfil/perfil_modificar.php?idpersona='+<?php echo  $_SESSION['idpersona']; ?>);" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;EDT.PERFIL</SPAN></a>        
                 </li> 
		
	        <li>
                    <a href="#" onclick="load_div('contents', 'libre/mozo_piso.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;REG.PEDIDOS</span></a>
                </li>
               
                  <li>
                    <a href="#" onclick="load_div('contents', 'ocupada/mozo_piso.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;ME.OCUPADAS</span></a>
                </li>
				<li>
                    <a href="../salir.php " style="cursor:pointer"> 
					<span class="glyphicon glyphicon-off"> Cerrar Sesion (<?php echo $_SESSION['persona']."</b>";?>)</span></a>               
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
		<div id="background">
		<br>
			<div id="page">
			
				<!--<div class="alert alert-warning" role="alert" style="width: 1000px; height: 240px;">
						<img src="../../imagenes/sea-sound.jpg" alt="Img"style="width:967px; height: 212px;">
				</div>-->
			
				<div id="contents">
                                    
                                    
                                    
                                    
                                  
				
					<!--<div id="contenido" >
                                            
					</div>-->
				</div>
			</div>
			
		
		</div>
			
	</div>

<!-- Modal -->
<div class="modal fade" id="personamod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_persona_mod" class="modal-body"></div></center>	
	  
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_body" class="modal-body"></div></center>	
	  
      <div class="modal-footer">
        www.usp.edu.pe
	  </div>
    </div>
  </div>
</div>
 <style>
    #mdialTamanio{
      width: 80% !important;
    }
  </style>
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_body1" ></div></center>	
	  
      <div class="modal-footer">
        www.usp.edu.pe
	  </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      
	  <center><div id="micontenidocliente" class="modal-body"></div></center>	
	  
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalPedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="micontenidopedido"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>

 <style>
    #mdialTamanio1{
      width: 60% !important;
    }
  </style>
  
    <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" id="mdialTamanio1">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_menu" class="modal-body"></div></center>	
	  
    </div>
  </div>
</div>

   <style>
    #mdialTamanio20{
      width: 80% !important;
    }
  </style>
<div class="modal fade" id="menupedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio20">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Menu de Hoy</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                              
                            <div id="menu_pedido" ></div>
                        </div>

                </div>
	    
    </div>
  </div>
</div>
  <style>
    #mdialTamanio2{
      width: 40% !important;
    }
  </style>
  <div class="modal fade" id="cartapedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Carta</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                            <center>
                            <div id="carta_pedido" ></div>
                            </center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  <div class="modal fade" id="entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Entradas</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                            <center>
                            <div id="carta_entrada" ></div>
                            </center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  <div class="modal fade" id="segundo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Segundos</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                            <center>
                            <div id="carta_segundo" ></div>
                            </center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
   <div class="modal fade" id="postre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Postres</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                            <center>
                            <div id="carta_postre" ></div>
                            </center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
   <div class="modal fade" id="bebida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;Bebidas</span> 
                            </center>
                        </div>

                        <div class="panel-body">
                            <center>
                            <div id="carta_bebida" ></div>
                            </center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  <div class="modal fade" id="listarpersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Persona </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_lista" name="form_persona_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de Persona&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersona" id="txtbuscarpersona" class="form-control" placeholder="Ingrese el nombre del persona a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_persona" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/ajax_funciones.js"></script>
	<!--<script src="../../js/ajax_data.js"></script>-->	
  </body>
</html>
<script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtbuscarmp').keyup(function(e) {
		
	load_div("menu_pedido","libre/menu.php");
	});
});
function mostrarDatos() {
	
	load_div("menu_pedido","libre/menu.php");
}
</script>
<script>
$(document).ready(function(e) {
	mostrarDatos1();
	
});
function mostrarDatos1() {
	
	load_div("carta_pedido","libre/plato.php");
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos2();
	
});
function mostrarDatos2() {
	
	load_div("carta_entrada","libre/carta/entrada.php");
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos3();
	
});
function mostrarDatos3() {
	
	load_div("carta_segundo","libre/carta/segundo.php");
}
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos4();
	
});
function mostrarDatos4() {
	
	load_div("carta_postre","libre/carta/postre.php");
}
</script>
<script>
$(document).ready(function(e) {
	mostrarDatos5();
	
});
function mostrarDatos5() {
	
	load_div("carta_bebida","libre/carta/bebida.php");
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos6();
	$('#txtbuscarpersona').keyup(function(e) {
		  var tbp= document.form_persona_lista.txtbuscarpersona;
	load_div("lista_persona", "libre/persona.php?q="+tbp.value);
	});
});
function mostrarDatos6() {
	 var tbp= document.form_persona_lista.txtbuscarpersona;
	load_div("lista_persona", "libre/persona.php?q="+tbp.value);
}
</script>



<?php
}else{
	header('Location: ../../index.php'); 
}
?>