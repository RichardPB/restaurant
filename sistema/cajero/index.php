<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RESTARURANT</title>
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
                  La Cochera
					</span>
                </li>
                <li>
				<a data-toggle="modal"  data-target="#personamod" onclick="load_div('modal_persona_mod', 'perfil/perfil_modificar.php?idpersona='+<?php echo  $_SESSION['idpersona']; ?>);" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;EDT.PERFIL</SPAN></a>        
                </li> 
                  <li>
				<a href="#" onclick="load_div('contenido', 'persona/persona_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.PERSONA</SPAN></a>        
                 </li> 
                  <li>
				<a href="#" onclick="load_div('contenido', 'cliente/cliente_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.CLIENTE</SPAN></a>        
                 </li> 
						
					
			
				<li>
                    <a href="#" onclick="load_div('contenido', 'pago/mozo_piso.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;REG.COMPROBANTE</span></a>
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
			
				
			
				<div id="contents">
				
					<div id="contenido" >
                                            
					</div>
				</div>
			</div>
			
		
		</div>
			
	</div>

<!-- Modal -->
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
    #mdialTamanio{
      width: 60% !important;
    }
  </style>
<div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="ver_pedido"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
  
 
  

  
   <style>
    #mdialTamanio3{
      width: 80% !important;
    }
  </style>
  
  <div class="modal fade" id="listarpersonaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio3">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Cliente </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_listaa" name="form_persona_listaa" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de cliente&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersonaa" id="txtbuscarpersonaa" class="form-control" placeholder="Ingrese el cliente a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_personaa" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  
 
  <div class="modal fade" id="persona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_persona" class="modal-body"></div></center>	
	  
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
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Cliente </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_lista" name="form_persona_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de cliente&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersona" id="txtbuscarpersona" class="form-control" placeholder="Ingrese el cliente a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_persona" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  

  
  
   <div class="modal fade" id="listarpersonac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Cliente </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_listac" name="form_persona_listac" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de cliente&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersonac" id="txtbuscarpersonac" class="form-control" placeholder="Ingrese el cliente a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_personac" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div> 
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
  
  
    
 <div class="modal fade" id="listarpersonab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Cliente </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_listab" name="form_persona_listab" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de cliente&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersonab" id="txtbuscarpersonab" class="form-control" placeholder="Ingrese el cliente a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_personab" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>  
  <div class="modal fade" id="listarpersonad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Cliente </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_listad" name="form_persona_listad" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de cliente&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersonad" id="txtbuscarpersonad" class="form-control" placeholder="Ingrese el cliente a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_personad" ></div></center>
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
	mostrarDatos3();
	$('#txtbuscarpersona').keyup(function(e) {
		 var tbp= form_persona_lista.txtbuscarpersona;
	load_div("lista_persona","pago/persona.php?q="+tbp.value);
	});
});
function mostrarDatos3() {
	 var tbp= form_persona_lista.txtbuscarpersona;
	load_div("lista_persona","pago/persona.php?q="+tbp.value);
}
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos4();
	$('#txtbuscarpersonab').keyup(function(e) {
		 var tbp= form_persona_listab.txtbuscarpersonab;
	load_div("lista_personab","cliente/persona.php?q="+tbp.value);
	});
});
function mostrarDatos4() {
	 var tbp= form_persona_listab.txtbuscarpersonab;
	load_div("lista_personab","cliente/persona.php?q="+tbp.value);
}
</script>

<script>
$(document).ready(function(e) {
	
	$('#txtbuscarpersonaa').keyup(function(e) {
		 var tbp= form_persona_listaa.txtbuscarpersonaa;
	load_div("lista_personaa","persona/persona_listar.php?q="+tbp.value);
	});
});

</script>

<script>
$(document).ready(function(e) {
	
	$('#txtbuscarpersonac').keyup(function(e) {
		 var tbp= form_persona_listac.txtbuscarpersonac;
	load_div("lista_personac","cliente/cliente_listar.php?q="+tbp.value);
	});
});

</script>

<script>
$(document).ready(function(e) {
	mostrarDatos5();
	$('#txtbuscarpersonad').keyup(function(e) {
		 var tbp= form_persona_listad.txtbuscarpersonad;
	load_div("lista_personad","cliente/persona_1.php?q="+tbp.value);
	});
});
function mostrarDatos5() {
	 var tbp= form_persona_listad.txtbuscarpersonad;
	load_div("lista_personad","cliente/persona_1.php?q="+tbp.value);
}
</script>

<?php
}else{
	header('Location: ../../index.php'); 
}
?>