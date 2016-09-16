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
				<a href="#" onclick="load_div('contenido', 'usuario/usuario_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.USUARIO</SPAN></a>        
                                
                 </li> 
			 <li>
				<a href="#" onclick="load_div('contenido', 'persona/persona_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.PERSONA</SPAN></a>        
                 </li> 
                  <li>
				<a href="#" onclick="load_div('contenido', 'empleado/empleado_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.TRABAJADOR</SPAN></a>        
                 </li> 
                 <li>
                                <a href="#" onclick="load_div('contenido', 'TipoBebida/TipoBebida_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-plus" aria-hidden="true">&nbsp;REG.TIPO DE BEBIDA</span></a>
                </li>	
                 <li>
                                <a href="#" onclick="load_div('contenido', 'Bebida/Bebida_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-plus" aria-hidden="true">&nbsp;REG.DE BEBIDA</span></a>
                </li>
	        <li>
                               <a href="#" onclick="load_div('contenido', 'mesa/mesa_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-plus" aria-hidden="true">&nbsp;REG.MESA</span></a>
                </li>
				
				<li>
                    <a href="#" onclick="load_div('contenido', 'plato/plato_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-pushpin" aria-hidden="true">&nbsp;REG.PLATOS</span></a>
                </li>
                
                	<li>
                    <a href="#" onclick="load_div('contenido', 'menu/menu_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-pushpin" aria-hidden="true">&nbsp;REG.MENU DEL DIA</span></a>
                </li>
				
			
				<li>
                    <a href="#" onclick="load_div('contenido', 'carta/carta_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;REG.CARTA</span></a>
                </li>
                	<li>
                    <a href="#" onclick="load_div('contenido', 'reporte/reporte.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;REPORTES</span></a>
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
			
				<div class="alert alert-warning" role="alert" style="width: 1000px; height: 240px;">
						<img src="../../imagenes/sea-sound.jpg" alt="Img"style="width:967px; height: 212px;">
				</div>
			
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

 <style>
    #mdialTamanio{
      width: 90% !important;
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
	  
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="listarpersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Persona </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_persona_lista" name="form_persona_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de persona&nbsp</span></span>
                                                <input type="text" name="txtbuscarpersona" id="txtbuscarpersona" class="form-control" placeholder="Ingrese el nombre a buscar" onkeypress="return soloLetras(event)">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_persona" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>


<div class="modal fade" id="listarempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio1">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Empleados </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_empleado_lista" name="form_empleado_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Empleado&nbsp</span></span>
                                                <input type="text" name="txtbuscarempleado" id="txtbuscarempleado" class="form-control" placeholder="Ingrese nombre">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_empleado" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>

<div class="modal fade" id="listartipobebida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Tipo de bebidas </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_tipobebida_lista" name="form_tipobebida_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar tipo de bebida&nbsp</span></span>
                                                <input type="text" name="txtbuscartipobebida" id="txtbuscartipobebida" class="form-control" placeholder="Ingrese nombre">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_tipobebida" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>



<div class="modal fade" id="listarbebida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de bebidas </span> 
                           </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_bebida_lista" name="form_bebida_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar bebida&nbsp</span></span>
                                                <input type="text" name="txtbuscarbebida" id="txtbuscarbebida" class="form-control" placeholder="Ingrese nombre">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_bebida" ></div></center>
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

<!-- MODAL MODIFICAR EMPLEADO-->
<div class="modal fade" id="empleadomod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_empleado_mod" class="modal-body"></div></center>	
	  
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

<div class="modal fade" id="bebidatipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Tipo de Bebida </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_bebidatipo_lista1" name="form_bebidatipo_lista1" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscartipobebida1" id="txtbuscartipobebida1" class="form-control" placeholder="Ingrese el tipo de bebida a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="bebida_tipo" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
 <style>
    #mdialTamanio1{
      width: 50% !important;
    }
  </style>
<div class="modal fade" id="listarmesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio1" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Listado de Mesas </span> 
                       </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_mesa_lista1" name="form_mesa_lista1" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar mesa&nbsp</span></span>
                                                <input type="text" name="txtbuscarmesa" id="txtbuscarmesa" class="form-control" placeholder="Ingrese su numero a buscar" onkeypress="return soloLetras(event)">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_mesa" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
<div class="modal fade" id="mesa_mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="mesa_modificar"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>

<div class="modal fade" id="listarplato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio1" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_plato_lista1" name="form_plato_lista1" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar Plato&nbsp</span></span>
                                                <input type="text" name="txtbuscarplato" id="txtbuscarplato" class="form-control" placeholder="Ingrese nombre de plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_plato" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>

  <div class="modal fade" id="plato_mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="plato_modificar"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
  <style>
    #mdialTamanio2{
      width: 70% !important;
    }
  </style>
  <div class="modal fade" id="listarcarta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" id="mdialTamanio2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos a la carta </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_carta_lista1" name="form_carta_lista1" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscarcarta" id="txtbuscarcarta" class="form-control" placeholder="Ingrese el nombre del plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_carta" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
   <style>
    #mdialTamanio4{
      width: 60% !important;
    }
  </style>
  
    <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" id="mdialTamanio4">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_menu" class="modal-body"></div></center>	
	  
    </div>
  </div>
</div>
  
  
   <div class="modal fade" id="carta_mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="carta_modificar"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
  
  
    <div class="modal fade" id="platocarta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos a la carta </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_carta_lista" name="form_carta_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscarcp" id="txtbuscarcp" class="form-control" placeholder="Ingrese el nombre del plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="plato_carta" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
      <div class="modal fade" id="menubebida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;lista de bebidas</span> 
                           </center> 
                        </div>

                        <div class="panel-body">
                                <form id="form_menubebida_lista" name="form_menubebida_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscarmenubebida" id="txtbuscarmenubebida" class="form-control" placeholder="Ingrese el nombre de bebdida">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="menu_bebida" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
 
 
  
  
     <div class="modal fade" id="vermenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="ver_menu"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
  
      <style>
    #mdialTamanio21{
      width: 50% !important;
    }
  </style>
  
 <div class="modal fade" id="listarmenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" id="mdialTamanio21">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de menus Registrados </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_menu_lista" name="form_menu_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Fecha&nbsp</span></span>
                                                <input type="date" name="txtbuscarmenu" id="txtbuscarmenu" class="form-control" placeholder="Ingrese el nombre del plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="lista_menu" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  
   <div class="modal fade" id="menu_mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog" id="mdialTamanio4">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="menu_modificar"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
  
  
  
   <div class="modal fade" id="platomenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos a la carta </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_platomenu_lista" name="form_platomenu_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscarcp1" id="txtbuscarcp1" class="form-control" placeholder="Ingrese el nombre del plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="plato_menu" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  <div class="modal fade" id="platomenumod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Platos a la carta </span> 
                        </div>

                        <div class="panel-body">
                                <form id="form_platomenu_listamod" name="form_platomenu_listamod" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Nombre&nbsp</span></span>
                                                <input type="text" name="txtbuscarcp1mod" id="txtbuscarcp1mod" class="form-control" placeholder="Ingrese el nombre del plato a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="plato_menumod" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  <style>
    #mdialTamanio5{
      width: 30% !important;
    }
  </style>
  
  
    <div class="modal fade" id="usuarioempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio5">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Empleado </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_usuarioempleado_lista" name="form_usuarioempleado_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar empleado&nbsp</span></span>
                                                <input type="text" name="txtbuscarue" id="txtbuscarue" class="form-control" placeholder="Ingrese el empleado a buscar">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="usuario_empleado" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  <div class="modal fade" id="empleadopersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio5">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista persona </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_empleadopersona_lista" name="form_empleadopersona_lista" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar persona&nbsp</span></span>
                                                <input type="text" name="txtbuscarep" id="txtbuscarep" class="form-control" placeholder="Ingrese nombre">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="empleado_persona" ></div></center>
                        </div>
           
                </div>
	    
    </div>
  </div>
</div>
  
  <div class="modal fade" id="empleadopersonamod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio5">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <Center>
                                <span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista persona </span> 
                            </center>
                        </div>

                        <div class="panel-body">
                                <form id="form_empleadopersona_listamod" name="form_empleadopersona_listamod" >
                                        <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar persona&nbsp</span></span>
                                                <input type="text" name="txtbuscarepmod" id="txtbuscarepmod" class="form-control" placeholder="Ingrese nombre">
                                           
                                        </div>
                                     <br>
                                        	
                                </form>
                            <center><div id="empleado_personamod" ></div></center>
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
$("#txtbuscarpersona" ).keyup(function(event) {
    var tbp= document.form_persona_lista.txtbuscarpersona;
    
  //  alert(tbp.value);
	load_div("lista_persona", "persona/persona_listar.php?q="+tbp.value);
});
</script>


<script>
$("#txtbuscarempleado" ).keyup(function(event) {
    var tbp= document.form_empleado_lista.txtbuscarempleado;
    
  //  alert(tbp.value);
	load_div("lista_empleado","empleado/empleado_listar.php?q="+tbp.value);
});
</script>

<script>
$("#txtbuscartipobebida" ).keyup(function(event) {
    var tbp= document.form_tipobebida_lista.txtbuscartipobebida;
    
  //  alert(tbp.value);
	load_div("lista_tipobebida","TipoBebida/TipoBebida_listar.php?q="+tbp.value);
});
</script>

<script>
$("#txtbuscarbebida" ).keyup(function(event) {
    var tbp= document.form_bebida_lista.txtbuscarbebida;
    
  //  alert(tbp.value);
	load_div("lista_bebida","Bebida/Bebida_listar.php?q="+tbp.value);
});
</script>


<script>
$("#txtbuscarmesa" ).keyup(function(event) {
    var tbp= document.form_mesa_lista1.txtbuscarmesa;
    
  //  alert(tbp.value);
	load_div("lista_mesa","mesa/mesa_listar.php?q="+tbp.value);
});
</script>

<script>
$("#txtbuscarplato" ).keyup(function(event) {
    var tbp= document.form_plato_lista1.txtbuscarplato;
  
  
  //  alert(tbp.value);
	load_div("lista_plato","plato/plato_listar.php?q="+tbp.value);
});
</script>

<script>
$("#txtbuscarcarta" ).keyup(function(event) {
    var tbp= document.form_carta_lista1.txtbuscarcarta;
  
  
  //  alert(tbp.value);
	load_div("lista_carta","carta/carta_listar.php?q="+tbp.value);
});
</script>

<script>
$("#txtbuscarmenu" ).change(function() {
    var tbp= document.form_menu_lista.txtbuscarmenu;
  
  //  alert(tbp.value);
	load_div("lista_menu","menu/menu_listar.php?q="+tbp.value);
});
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtbuscartipobebida1').keyup(function(e) {
		 var tbp= document.form_bebidatipo_lista1.txtbuscartipobebida1;
	load_div("bebida_tipo","Bebida/tipo_bebida.php?q="+tbp.value);
	});
});
function mostrarDatos() {
	 var tbp= document.form_bebidatipo_lista1.txtbuscartipobebida1;
	load_div("bebida_tipo","Bebida/tipo_bebida.php?q="+tbp.value);
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos1();
	$('#txtbuscarcp').keyup(function(e) {
		 var tbp= document.form_carta_lista.txtbuscarcp;
	load_div("plato_carta","carta/plato.php?q="+tbp.value);
	});
});
function mostrarDatos1() {
	 var tbp= document.form_carta_lista.txtbuscarcp;
	load_div("plato_carta","carta/plato.php?q="+tbp.value);
}
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos2();
	$('#txtbuscarmenubebida').keyup(function(e) {
		 var tbp= document.form_menubebida_lista.txtbuscarmenubebida;
	load_div("menu_bebida","menu/bebida.php?q="+tbp.value);
	});
});
function mostrarDatos2() {
	  var tbp= document.form_menubebida_lista.txtbuscarmenubebida;
	load_div("menu_bebida","menu/bebida.php?q="+tbp.value);
}
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos3();
	$('#txtbuscarcp1').keyup(function(e) {
		 var tbp= form_platomenu_lista.txtbuscarcp1;
	load_div("plato_menu","menu/plato.php?q="+tbp.value);
	});
});
function mostrarDatos3() {
	 var tbp= form_platomenu_lista.txtbuscarcp1;
	load_div("plato_menu","menu/plato.php?q="+tbp.value);
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos7();
	$('#txtbuscarcp1mod').keyup(function(e) {
		 var tbp= form_platomenu_listamod.txtbuscarcp1mod;
	load_div("plato_menumod","menu/plato_1.php?q="+tbp.value);
	});
});
function mostrarDatos7() {
	 var tbp= form_platomenu_listamod.txtbuscarcp1mod;
	load_div("plato_menumod","menu/plato_1.php?q="+tbp.value);
}
</script>



<script>
$(document).ready(function(e) {
	mostrarDatos4();
	$('#txtbuscarue').keyup(function(e) {
		 var tbp= form_usuarioempleado_lista.txtbuscarue;
	load_div("usuario_empleado","usuario/empleado.php?q="+tbp.value);
	});
});
function mostrarDatos4() {
	 var tbp= form_usuarioempleado_lista.txtbuscarue;
	load_div("usuario_empleado","usuario/empleado.php?q="+tbp.value);
}
</script>

<script>
$(document).ready(function(e) {
	mostrarDatos5();
	$('#txtbuscarep').keyup(function(e) {
		 var tbp= form_empleadopersona_lista.txtbuscarep;
	load_div("empleado_persona","empleado/persona.php?q="+tbp.value);
	});
});
function mostrarDatos5() {
	 var tbp= form_empleadopersona_lista.txtbuscarep;
	load_div("empleado_persona","empleado/persona.php?q="+tbp.value);
}
</script>


<script>
$(document).ready(function(e) {
	mostrarDatos6();
	$('#txtbuscarepmod').keyup(function(e) {
		 var tbp= form_empleadopersona_listamod.txtbuscarepmod;
	load_div("empleado_personamod","empleado/persona_1.php?q="+tbp.value);
	});
});
function mostrarDatos6() {
	 var tbp= form_empleadopersona_listamod.txtbuscarepmod;
	load_div("empleado_personamod","empleado/persona_1.php?q="+tbp.value);
}
</script>

<?php
}else{
	header('Location: ../../index.php'); 
}
?>