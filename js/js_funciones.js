function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}
function cargainicio(div,formulario)
{
	$("#"+div).load(formulario);
}
function pascid(a)
{
    //alert(a);
    document.frm_nca.txtncid.value=a;
}
function buscarplato(a,b,c)
{
    form_carta_reg.txtidplato.value=a;
    form_carta_reg.txtpersona.value=b;
    form_carta_reg.txttp.value=c;
}
function clientepedido(a,b)
{
   
    form_pago_reg.txtidcliente.value=a;
    form_pago_reg.txtcliente.value=b;
    
}

function platomenumod(a,b)
{
    form_menu_mod.txtidplato.value=a;
    form_menu_mod.txtplato.value=b;
}

function platomenu(a,b)
{
    form_menu_reg.txtidplato.value=a;
    form_menu_reg.txtplato.value=b;
}
function empleadousuario(a,b)
{
   
     form_usuario_reg.txtidempleado.value=a;
     form_usuario_reg.txtempleado.value=b;
}
function empleadopersona(a,b)
{
   
     form_empleado_reg.txtidpersona.value=a;
     form_empleado_reg.txtpersona.value=b;
}

function clientepersona(a,b)
{
   
     form_cliente_reg.txtidcliente.value=a;
     form_cliente_reg.txtcliente.value=b;
}
function clientepersonamod(a,b)
{
   
     form_cliente_mod.txtidcliente.value=a;
     form_cliente_mod.txtcliente.value=b;
}
function empleadopersonamod(a,b)
{
   
     form_empleado_mod.txtidpersona.value=a;
     form_empleado_mod.txtpersona.value=b;
}
function soloNumeros(e) 
{ 
    var key = window.Event ? e.which : e.keyCode 
    return ((key >= 48 && key <= 57) || (key==8))
}
function empleado_reg(){
	var idpersona= document.form_empleado_reg.txtidpersona;
        var fecnac = document.form_empleado_reg.txtfecnac;
        var cbtpcuenta = document.form_empleado_reg.cbtpcuenta;
       
	$.post('empleado/empleado_ope.php', 
		{	idpersona	: idpersona.value,		
			fecnac     	: fecnac.value,
                        cbtpcuenta      : cbtpcuenta.value                 
		},
		function (data){
			if(data=="OK"){
			       alert("SU EMPLEADO FUE REGISTRADO CORRECTAMENTE");
                               document.form_empleado_reg.txtpersona.value="";
                               document.form_empleado_reg.txtidpersona.value="";
                               document.form_empleado_reg.txtfecnac.value="";
                               document.form_empleado_reg.cbtpcuenta.value="Seleccionar";
			}else{
				alert(data);
			}
		}
	);
}
function empleado_mod(idempleado){
        var idpersona= document.form_empleado_mod.txtidpersona;
        var fecnac = document.form_empleado_mod.txtfecnac;
        var cbtpcuenta = document.form_empleado_mod.cbtpcuenta;
       
	$.post('empleado/empleado_pre_modificar_op.php', 
		{	idempleado      : idempleado,
                        idpersona	: idpersona.value,		
			fecnac     	: fecnac.value,
                        cbtpcuenta      : cbtpcuenta.value                 
		},
		function (data){
			if(data=="OK"){
			       alert("SU REGISTRO FUE MODIFICADO CORRECTAMENTE");
                               document.form_empleado_mod.txtpersona.value="";
                               document.form_empleado_mod.txtidpersona.value="";
                               document.form_empleado_mod.txtfecnac.value="";
                               document.form_empleado_mod.cbtpcuenta.value="Seleccionar";
                               load_div("lista_empleado", "empleado/empleado_listar.php?q=");
                                $('#empleadomod').modal('hide');
			}else{
				alert(data);
			}
		}
	);
}
function persona_reg(){
    	
	var nombre	= document.form_persona_reg.txtnombre;
	if(nombre.value == ""){
		alert('Ingrese su nombre');
		return false;
    }
	
	var ape_paterno	= document.form_persona_reg.txtape_paterno;
	if(ape_paterno.value == ""){
		alert('Ingrese su apellido paterno');
		return false;
    }
	
	var ape_materno	= document.form_persona_reg.txtape_materno;
	if(ape_materno.value == ""){
		alert('Ingrese su apellido materno');
		return false;
    }
	
	var sexo = document.form_persona_reg.cbosexo;
	if(sexo.value == "Seleccionar"){
		alert('Ingrese el sexo al que pertenece');
		return false;
    }
		
              
	var telefono	= document.form_persona_reg.txttelefono;
	if(telefono.value == ""){
		alert('Ingrese el numero telefonico');
		return false;
    }
	
	var direccion	= document.form_persona_reg.txtdireccion;
	if(direccion.value == ""){
		alert('Ingrese la direccion');
		return false;
    }
	
	var email	= document.form_persona_reg.txtcorreo;
	if(email.value == ""){
		alert('Ingrese la direccion electronica');
		return false;
    }
    var tpdocumento = document.form_persona_reg.cbdocumento;
	if(tpdocumento.value == "Seleccionar"){
		alert('Ingrese el tipo de documento');
		return false;
    }
    var documento = document.form_persona_reg.txtdocumento;
	if(documento.value == ""){
		alert('Ingrese el numero de documento');
		return false;
    }
	
	$.post('persona/persona_ope.php', 
		{	
			nombre 		: nombre.value,
			ape_paterno     : ape_paterno.value,
			ape_materno     : ape_materno.value,
			sexo 		: sexo.value,
			
			telefono	: telefono.value,
			direccion 	: direccion.value,
			email 		: email.value,
                        tpdocumento     : tpdocumento.value,
                        documento       : documento.value
			
			
		},
		function (data){
			if(data=='OK'){	
		            alert("SU REGISTRO FUE REALIZADO CORRECTAMENTE");
				nombre.value		="";
				ape_paterno.value	="";
				ape_materno.value	="";
				sexo.value		="Seleccionar";				
				
				telefono.value		="";
				direccion.value		="";
				email.value		="";
                                tpdocumento.value       ="Seleccionar";
                                documento.value         ="";
				load_div("subcontenido", "persona/persona_listar_1.php?q=");
                                 $('#persona').modal('hide');
			}
			else{
				alert(data);
			}
		}
	);
}
function persona_modificar(idpersona){
	
	var nombre	= document.form_persona_mod.txtnombre;
	if(nombre.value == ""){
		alert('Ingrese su nombre');
		return false;
    }
	
	var ape_paterno	= document.form_persona_mod.txtape_paterno;
	if(ape_paterno.value == ""){
		alert('Ingrese su apellido paterno');
		return false;
    }
	
	var ape_materno	= document.form_persona_mod.txtape_materno;
	if(ape_materno.value == ""){
		alert('Ingrese su apellido materno');
		return false;
    }
	
	var sexo = document.form_persona_mod.cbosexo;
	if(sexo.value == "Seleccionar"){
		alert('Ingrese el sexo al que pertenece');
		return false;
    }
	
	
	var telefono	= document.form_persona_mod.txttelefono;
	if(telefono.value == ""){
		alert('Ingrese el numero telefonico del usuario');
		return false;
    }
	
	var direccion	= document.form_persona_mod.txtdireccion;
	if(direccion.value == ""){
		alert('Ingrese la direccion del usuario');
		return false;
    }
	
	var email	= document.form_persona_mod.txtcorreo;
	if(email.value == ""){
		alert('Ingrese la direccion electronica del usuario');
		return false;
    }
         var tpdocumento = document.form_persona_mod.cbdocumento;
	if(tpdocumento.value == "Seleccionar"){
		alert('Ingrese el tipo de documento');
		return false;
    }
         var numero = document.form_persona_mod.txtdocumento;
	if(numero.value == ""){
		alert('Ingrese el numero de documento');
		return false;
    }
	
	$.post('persona/persona_pre_modificar_op.php', 
		{	idpersona	:idpersona,
			nombre 		: nombre.value,
			ape_paterno     : ape_paterno.value,
			ape_materno     : ape_materno.value,
			sexo 		: sexo.value,
			telefono	: telefono.value,
			direccion 	: direccion.value,
			email 		: email.value,
                        tpdocumento     : tpdocumento.value,
                        numero          : numero.value
				
		},
		function (data){
			if(data=='OK'){	
				alert("SU REGISTRO FUE MODIFICADO CORRECTAMENTE");
				nombre.value		="";
				ape_paterno.value	="";
				ape_materno.value	="";
				sexo.value	        ="Seleccionar";
				telefono.value		="";
				direccion.value		="";
				email.value	        ="";
				numero.value            ="";
                                tpdocumento.value       ="Seleccion";
				load_div("lista_persona", "persona/persona_listar.php?q=");
                                load_div("lista_personaa", "persona/persona_listar.php?q=");
                                $('#personamod').modal('hide');
			}
			else{
				alert(data);
			}
		}
	);	
}
function perfil_modificar(idpersona){
	
	var nombre	= document.form_perfil_mod.txtnombre;
	if(nombre.value == ""){
		alert('Ingrese su nombre');
		return false;
    }
	
	var ape_paterno	= document.form_perfil_mod.txtape_paterno;
	if(ape_paterno.value == ""){
		alert('Ingrese su apellido paterno');
		return false;
    }
	
	var ape_materno	= document.form_perfil_mod.txtape_materno;
	if(ape_materno.value == ""){
		alert('Ingrese su apellido materno');
		return false;
    }
	
	var sexo = document.form_perfil_mod.cbosexo;
	if(sexo.value == "Seleccionar"){
		alert('Ingrese el sexo al que pertenece');
		return false;
    }
	
	
	var telefono	= document.form_perfil_mod.txttelefono;
	if(telefono.value == ""){
		alert('Ingrese el numero telefonico del usuario');
		return false;
    }
	
	var direccion	= document.form_perfil_mod.txtdireccion;
	if(direccion.value == ""){
		alert('Ingrese la direccion del usuario');
		return false;
    }
	
	var email	= document.form_perfil_mod.txtcorreo;
	if(email.value == ""){
		alert('Ingrese la direccion electronica del usuario');
		return false;
    }
         var tpdocumento = document.form_perfil_mod.cbdocumento;
	if(tpdocumento.value == "Seleccionar"){
		alert('Ingrese el tipo de documento');
		return false;
    }
         var numero = document.form_perfil_mod.txtdocumento;
	if(numero.value == ""){
		alert('Ingrese el numero de documento');
		return false;
    }
           var usuario = document.form_perfil_mod.txtuser;
	if(usuario.value == ""){
		alert('Ingrese Usuario');
		return false;
    }
            var clave = document.form_perfil_mod.txtcontrasena;
	if(clave.value == ""){
		alert('Ingrese clave');
		return false;
    }
	
	$.post('perfil/perfil_modificar_op.php', 
		{	idpersona	: idpersona,
			nombre 		: nombre.value,
			ape_paterno     : ape_paterno.value,
			ape_materno     : ape_materno.value,
			sexo 		: sexo.value,
			telefono	: telefono.value,
			direccion 	: direccion.value,
			email 		: email.value,
                        tpdocumento     : tpdocumento.value,
                        numero          : numero.value,
                        usuario         : usuario.value,
                        clave           : clave.value
				
		},
		function (data){
                   
			if(data=='OK'){	
                             alert("SU PERFIL SE EDITO CORRECTAMENTE");
												
                                $('#personamod').modal('hide');
			}
			else{
				alert(data);
			}
		}
	);	
}
function login(){
	var usuario = document.form_usuario_reg.txtusuario;
	var clave = document.form_usuario_reg.txtclave;
	//alert(usuario.value+" "+clave.value);
        if(usuario.value !== "" && clave.value !== ""){
	$.post('conexion/usuario_validar.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value			
		},
		function (data){
                      
                    
			if(data==1){
                         alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                         $(location).attr('href','sistema/administrador/index.php');
			//	window.location.href = "sistema/administrador/index.php";
			}else{
                          
				 if(data==2){
                                        alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                                        $(location).attr('href','sistema/cliente/index.php');
                                 
                                   }else{
                                       
                                            if(data==3){
                                                alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                                                $(location).attr('href','sistema/mozo/index.php');
                                           
                                            }else{
                                               
                                                    if(data==4){
                                                    alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                                                    $(location).attr('href','sistema/cajero/index.php');
                                           
                                                    }else{

                                                           alert(data);
                                                    }
                                            }
                                   }
			}
                       
                         
		}
	);}else{
            alert('Complete los dos campos');
        }
}
function prg_sec(){
	var usuario = document.frm_re.txtusuario;
	//alert(usuario.value);
	$.post('conexion/preguntasec.php', 
		{	usuario	: usuario.value		
		},
		function (data){
			if(data){
				cargarformulario('recup','conexion/preguntasec.php?usuario='+usuario.value);
			}
		}
	);
}
function cargarformulario(div,formulario)
{
	$("#"+div).load(formulario);
	$( "#"+div ).hide();
	if ( $( "#"+div ).is( ":hidden" ) ) {
    $( "#"+div ).slideDown( "slow" );
  } //else {
    //$( "#contenido" ).hide();
  //}
}
function validpreg(){
	var nombre = document.frm_re.txtnombre;
        var email = document.frm_re.txtemail;
        var phpmailer =document.frm_re.phpmailer;
         var usuario =document.frm_re.clave;
	//alert(usuario.value);
	$.post('conexion/envio_email.php', 
		{   
                    nombre     : nombre.value,
                    email      : email.value,
                   phpmailer   : phpmailer.value,
                   usuario     : usuario.value
		},
		function (data){
                  alert(data);
			if(data==1){
                           alert("ERROR AL ENVIAR EL CORREO");
			}else{
				
                                 alert("SE EL ENVIO UN CORREO CON SU NUEVA CONTRASEÑA");
                            window.location.href ="index.php";
			}
		}
	);
}
function usuario_reg(){
	
	var usuario	= document.form_usuario_reg.txtuser;
	if( usuario.value == "" ) {
		alert('Ingrese usuario');
		return false;
    }
	
	var contrasena	= document.form_usuario_reg.txtcontrasena;
	if(contrasena.value == ""){
		alert('Ingrese una contraseña para su usuario');
		return false;
    }
	
	var pregunta	= document.form_usuario_reg.cbpregunta;
	if(pregunta.value == "Seleccionar"){
		alert('Ingrese su pregunta');
		return false;
    }

	var respuesta	= document.form_usuario_reg.txtrespuesta;
	if(respuesta.value == ""){
		alert('Ingrese su respuesta');
		return false;
    }
	
	var fecact	= document.form_usuario_reg.txtfecact;
	if(fecact.value == ""){
		alert('Ingrese su fecha de activación');
		return false;
    }
	
	var feccan = document.form_usuario_reg.txtfeccan;
	if(feccan.value == ""){
		alert('Ingrese su fecha de cancelación');
		 return false;	
    }
	 if(feccan.value < fecact.value){
		alert('Su fecha de cancelación es  errone');
		 return false;
	}
	var cbotipo	= document.form_usuario_reg.cbotipo;
	if(cbotipo.value == "Seleccionar"){
		alert('Ingrese el tipo de cuenta');
		return false;
    }
	
	var  empleado	= document.form_usuario_reg.txtidempleado;
	if(empleado == ""){
		alert('Ingrese el empleado');
		return false;
    }
	
	
	$.post('usuario/usuario_ope.php', 
		{	usuario 	: usuario.value,
			contrasena 	: contrasena.value,
			pregunta 	: pregunta.value,
			respuesta       : respuesta.value,
			fecact          : fecact.value,
			feccan 		: feccan.value,
			cbotipo         : cbotipo.value,
			empleado	: empleado.value
			
		},
		function (data){
			if(data=='OK'){	
				usuario.value		="";		
				contrasena.value	="";		
				pregunta.value		="Seleccionar";
				respuesta.value	        ="";
				fecact.value	        ="";
				feccan.value		="";
				cbotipo.value	        ="Seleccionar";
				empleado.value		="";
				//load_div("subcontenido", "usuario/usuario_list.php?q=");
			}
			else{
				alert(data);
			}
		}
	);
}
function tipobebida_reg(){
    	 var nombre = document.form_tipobebida_reg.txtnombre;
	if( nombre.value == "" ) {
		alert('Ingrese nombre de tipo de bebida');
		return false;
    }
	$.post('TipoBebida/TipoBebida_reg_ope.php', 
		{	nombre		: nombre.value	     
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("subcontenido", "tipoBebida/tipoBebida_listar_1.php?q=");
                                 $('#persona').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function TipoBebida_mod(){
        var idTipoBebida = document.form_TipoBebida_mod.txtidTipoBebida;
        var nombre = document.form_TipoBebida_mod.txtTipoBebida;
        
	$.post('TipoBebida/TipoBebida_pre_modificar_ope.php', 
		{	
                    idTipoBebida        :idTipoBebida.value,
                    nombre		: nombre.value	     
		},
		function (data){
			if(data=="ok"){
                            alert('SU ACTUALIZACIÓN SE REALIZO CORRECTAMENTE');
				load_div("lista_tipobebida", "tipobebida/tipobebida_listar.php?q=");
                                $('#empleadomod').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function Bebida_reg(){
        var bebida = document.form_bebida_reg.txtBebida;
        if( bebida.value == "" ) {
		alert('Ingrese nombre de bebida');
		return false;
    }
        var idtipo = document.form_bebida_reg.txtidtipo;
        if( idtipo.value == "" ) {
		alert('Ingrese nombre de tipo de bebida');
		return false;
       }
        
        
	$.post('Bebida/Bebida_reg_ope.php', 
		{	
                    idTipo        :idtipo.value,
                    nombre	  : bebida.value	     
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("subcontenido", "bebida/bebida_listar_1.php?q=");
                                $('#persona').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function Bebida_mod(idbebida){
        var bebida = document.form_Bebida_mod.txtBebida;
        var idtipo = document.form_Bebida_mod.txtidtipo;
        
	$.post('Bebida/Bebida_pre_modificar_ope.php', 
		{	
                    idbebida      :idbebida,
                    idTipo        :idtipo.value,
                    nombre	  : bebida.value	     
		},
		function (data){
			if(data=="ok"){
                            alert('SU ACTUALIZACIÓN SE REALIZO CORRECTAMENTE');
				load_div("lista_bebida", "bebida/bebida_listar.php?q=");
                                $('#empleadomod').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function mesa_reg(){
        var numero = document.form_mesa_reg.txtnumero;
        if( numero.value == "" ) {
		alert('Ingrese numero de mesa');
		return false;
    }
        var nivel = document.form_mesa_reg.cbnivel;
        if( nivel.value == "Seleccionar" ) {
		alert('Ingrese nombre de tipo de bebida');
		return false;
       }
         var tipomesa = document.form_mesa_reg.cbtpmesa;
        if( tipomesa.value == "Seleccionar" ) {
		alert('Ingrese el tipo de mesa');
		return false;
       }
        
           var capacidad = document.form_mesa_reg.cbcapacidad;
        if( capacidad.value == "Seleccionar" ) {
		alert('Ingrese la capacidad de comensales');
		return false;
       }
       
           var ubicacion = document.form_mesa_reg.cbubicacion;
        if( ubicacion.value == "Seleccionar" ) {
		alert('Ingrese la ubicacion de la mesa');
		return false;
       }
	$.post('mesa/mesa_reg_ope.php', 
		{	
                    numero     :numero.value,
                    nivel      :nivel.value,
                    tipomesa   :tipomesa.value,
                    ubicacion  :ubicacion.value,
                    capacidad  :capacidad.value
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("subcontenido", "mesa/mesa_listar_1.php?q=");
                                $('#persona').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function mesa_mod(idmesa){
        var numero = document.form_mesa_mod.txtnumero;
        if( numero.value == "" ) {
		alert('Ingrese numero de mesa');
		return false;
    }
        var nivel = document.form_mesa_mod.cbnivel;
        if( nivel.value == "Seleccionar" ) {
		alert('Ingrese nombre de tipo de bebida');
		return false;
       }
         var tipomesa = document.form_mesa_mod.cbtpmesa;
        if( tipomesa.value == "Seleccionar" ) {
		alert('Ingrese el tipo de mesa');
		return false;
       }
        
           var capacidad = document.form_mesa_mod.cbcapacidad;
        if( capacidad.value == "Seleccionar" ) {
		alert('Ingrese la capacidad de comensales');
		return false;
       }
       
           var ubicacion = document.form_mesa_mod.cbubicacion;
        if( ubicacion.value == "Seleccionar" ) {
		alert('Ingrese la ubicacion de la mesa');
		return false;
       }
	$.post('mesa/mesa_pre_modificar_ope.php', 
		{	
                    idmesa     :idmesa,
                    numero     :numero.value,
                    nivel      :nivel.value,
                    tipomesa   :tipomesa.value,
                    ubicacion  :ubicacion.value,
                    capacidad  :capacidad.value
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("lista_mesa", "mesa/mesa_listar.php?q=");
                                $('#mesa_mod').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function plato_reg(){
        var nombre = document.form_plato_reg.txtnombre;
        if( nombre.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
        var descripcion = document.form_plato_reg.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese ingrese la descripcion del plato');
		return false;
       }
        
        
           var cbtpplato = document.form_plato_reg.cbtpplato;
        if( cbtpplato.value == "Seleccionar" ) {
		alert('Ingrese el tipo de plato');
		return false;
       }
                   
	$.post('plato/plato_reg_ope.php', 
		{	
                    nombre       :nombre.value,
                    descripcion  :descripcion.value,
                    
                    cbtpplato    :cbtpplato.value
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("subcontenido", "plato/plato_listar_1.php?q=");
                                $('#persona').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function plato_mod(idplato){
        var nombre = document.form_plato_mod.txtnombre;
        if( nombre.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
        var descripcion = document.form_plato_mod.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese ingrese la descripcion del plato');
		return false;
       }
        
           var cbtpplato = document.form_plato_mod.cbtpplato;
        if( cbtpplato.value == "Seleccionar" ) {
		alert('Ingrese el tipo de plato');
		return false;
       }
                   
	$.post('plato/plato_pre_modificar_ope.php', 
		{	
                    idplato      :idplato,
                    nombre       :nombre.value,
                    descripcion  :descripcion.value,
                   
                    cbtpplato    :cbtpplato.value
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("lista_plato", "plato/plato_listar.php?q=");
                                $('#plato_mod').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function carta_reg(){
    var tp = document.form_carta_reg.txttp;
   if( tp.value == "" ) {
		alert('Ingrese el nombre del plato o bebida');
		return false;
    }
    
        var nombre = document.form_carta_reg.txtidplato;
        if( nombre.value == "" ) {
		alert('Ingrese el nombre del plato o bebida');
		return false;
    }
        var descripcion = document.form_carta_reg.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese ingrese la descripcion del plato o bebida');
		return false;
       }
          var precio = document.form_carta_reg.txtprecio;
        if( precio.value == "" ) {
		alert('Ingrese precio');
		return false;
       }
           var stock = document.form_carta_reg.txtstock;
        if( stock.value == "" ) {
		alert('Ingrese el stock');
		return false;
       }
          var fecha = document.form_carta_reg.txtfecha;
        if( fecha.value == "" ) {
		alert('Ingrese fecha');
		return false;
       }
                   
	$.post('carta/carta_reg_ope.php', 
		{
                    tp           :tp.value,
                    nombre       :nombre.value,
                    descripcion  :descripcion.value,
                    precio       :precio.value,
                    stock        :stock.value,
                    fecha        :fecha.value
                    
                    
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("subcontenido", "carta/carta_listar_1.php?q=");
                                $('#persona').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function carta_mod(idcarta,tp){
        var nombre = document.form_carta_mod.txtidplato;
        if( nombre.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
        var descripcion = document.form_carta_mod.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese ingrese la descripcion del plato');
		return false;
       }
        
        
           var precio = document.form_carta_mod.txtprecio;
        if( precio.value == "" ) {
		alert('Ingrese el precio de plato');
		return false;
       }
           var stock = document.form_carta_mod.txtstock;
        if( stock.value == "" ) {
		alert('Ingrese el stock');
		return false;
       }
          var fecha = document.form_carta_mod.txtfecha;
        if( fecha.value == "" ) {
		alert('Ingrese fecha');
		return false;
       }
                   
	$.post('carta/carta_pre_modificar_ope.php', 
		{	tp       :tp,
                    idcarta      :idcarta,            
                    nombre       :nombre.value,
                    descripcion  :descripcion.value,
                    precio       :precio.value,
                    stock        :stock.value,
                    fecha        :fecha.value
                    
                    
                    
		},
		function (data){
			if(data=="ok"){
                            alert('SU REGISTRO SE REALIZO CORRECTAMENTE');
				load_div("lista_carta", "carta/carta_listar.php?q=");
                                $('#carta_mod').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function regbebida_reg(){
        var idbebida = document.form_menu_reg.txtidbebida;
        if( idbebida.value == "" ) {
		alert('Ingrese el nombre de bebida');
		return false;
    }
         var bebida = document.form_menu_reg.txtbebida;
        if( bebida.value == "" ) {
		alert('Ingrese el nombre de bebida');
		return false;
    }
        var cantidad = document.form_menu_reg.txtbebcan;
        if( cantidad.value == "" ) {
		alert('Ingrese ingrese la cantidad a preparar');
		return false;
       }
              
                   
	$.post('menu/detalle/bebida_reg_ope.php', 
		{	
                    nombre       :idbebida.value,
                    nombre1      :bebida.value,
                    cantidad     :cantidad.value
                  
		},
		function (data){
			if(data=="ok"){
                                
				load_div('modal_menu', 'menu/menu_reg.php');
                               
			}else{
				alert('LA BEBIDA YA SE ENCUENTRA REGISTRADA SELECCIONE OTRA');
                                
			}
		}
	);
}
function regplato_reg(){
        var idplato = document.form_menu_reg.txtidplato;
        if( idplato.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
         var plato = document.form_menu_reg.txtplato;
        if( plato.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
        var cantidad = document.form_menu_reg.txtplacan;
        if( cantidad.value == "" ) {
		alert('Ingrese ingrese la cantidad a preparar');
		return false;
       }
          
	$.post('menu/detalle/plato_reg_ope.php', 
		{	
                    nombre       :idplato.value,
                    nombre1      :plato.value,
                    cantidad     :cantidad.value
                  
		},
		function (data){
			if(data=="ok"){
                                
				load_div('modal_menu', 'menu/menu_reg.php');
                               
			}else{
				alert('EL PLATO YA SE ENCUENTRA REGISTRADA SELECCIONE OTRA');
                                
			}
		}
	);
}
function elibebida_eli(){
   var bebida = document.getElementsByName("bebida");
         //   alert(bebida[0].value);
           // var bebi=bebida.json("*");
            var  b=[];
           for (i = 0; i < bebida.length; i++) { 
    if(bebida[i].checked==true){
        b[i]=bebida[i].value;
    }
         
        // alert(bebida[i].value);
       }
	$.post('menu/detalle/bebida_eliminar.php', 
		{	
                    bebida       :b
		},
		function (data){
			if(data=='ok'){
                                
				alert('SELECCIONE BEBIDA A ELIMINAR');
                               
			}else{
				
                                load_div('modal_menu', 'menu/menu_reg.php');    
			}
		}
	);
}
function eliplato_eli(){
   var plato = document.getElementsByName("carta");
         //   alert(bebida[0].value);
           // var bebi=bebida.json("*");
            var  p=[];
            for (i = 0; i < plato.length; i++) { 
           if(plato[i].checked==true){
             p[i]=plato[i].value;
    }
            }
	$.post('menu/detalle/plato_eliminar.php', 
		{	
                    plato       :p
		},
		function (data){
			if(data=='ok'){
                                
				alert('SELECCIONE PLATO HA ELIMINAR');
                               
			}else{
				
                                load_div('modal_menu', 'menu/menu_reg.php');
                                
			}
		}
	);
}
function menu_reg(){
        var descripcion = document.form_menu_reg.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese la descripcion del menu');
		return false;
    }
         var precio = document.form_menu_reg.txtprecio;
        if( precio.value == "" ) {
		alert('Ingrese el precio del menu');
		return false;
    }
        var fecha = document.form_menu_reg.txtfecha;
        if( fecha.value == "" ) {
		alert('Ingrese fecha de preparacion');
		return false;
       }
          
	$.post('menu/menu_reg_ope.php', 
		{	
                    descripcion       :descripcion.value,
                    precio            :precio.value,
                    fecha             :fecha.value
                  
		},
		function (data){
			if(data=="ok"){
                                alert('EL MENU SE REGISTRO CORRECTAMENTE');
				load_div('contenido', 'menu/menu_pre_list.php');
                                $('#menu').modal('hide');
			}else{
				alert(data);
                                
			}
		}
	);
}
function menu_mod(menuid){
        var descripcion = document.form_menu_mod.txtdescripcion;
        if( descripcion.value == "" ) {
		alert('Ingrese la descripcion del menu');
		return false;
    }
         var precio = document.form_menu_mod.txtprecio;
        if( precio.value == "" ) {
		alert('Ingrese el precio del menu');
		return false;
    }
        var fecha = document.form_menu_mod.txtfecha;
        if( fecha.value == "" ) {
		alert('Ingrese fecha de preparacion');
		return false;
       }
          
	$.post('menu/menu_mod_ope.php', 
		{	
                    menuid            :menuid,            
                    descripcion       :descripcion.value,
                    precio            :precio.value,
                    fecha             :fecha.value
                  
		},
		function (data){
			if(data=="ok"){
                                alert('EL MENU SE ACTUALIZO CORRECTAMENTE');
				load_div('contenido', 'menu/menu_pre_list.php');
                                $('#menu_mod').modal('hide');
                                
			}else{
				alert(data);
                                
			}
		}
	);
}
function modplato_mod(menuid){
        var idplato = document.form_menu_mod.txtidplato;
        if( idplato.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
         var plato = document.form_menu_mod.txtplato;
        if( plato.value == "" ) {
		alert('Ingrese el nombre del plato');
		return false;
    }
        var cantidad = document.form_menu_mod.txtplacan;
        if( cantidad.value == "" ) {
		alert('Ingrese ingrese la cantidad a preparar');
		return false;
       }
          
	$.post('menu/detalle/plato_mod_ope.php', 
		{	
                    menuid       :menuid,
                    nombre       :idplato.value,
                    nombre1      :plato.value,
                    cantidad     :cantidad.value
                  
		},
		function (data){
			if(data=="ok"){
                                
				load_div('menu_modificar', 'menu/menu_pre_modificar.php?idmenu='+menuid);
                               
			}else{
				alert('EL PLATO YA SE ENCUENTRA REGISTRADA SELECCIONE OTRA');
                                
			}
		}
	);
}
function modplato_eliminar(menuid){
   var plato = document.getElementsByName("carta");
            var c=[];
            for (i = 0; i < plato.length; i++) { 
            if(plato[i].checked==true){
             c[i]=plato[i].value;
           
           }
            }
	$.post('menu/detalle/plato_mod_eliminar.php', 
		{	
                    plato1       :c
		},
		function (data){
                  
			if(data=='ok'){
                                
				alert('SELECCIONE PLATO HA ELIMINAR');
                               
			}else{
				
                               load_div('menu_modificar', 'menu/menu_pre_modificar.php?idmenu='+menuid);
                                
			}
		}
	);
}
function menu_ped_reg(){
   var cantidad = document.getElementsByName("txtcantidad3");
    var posicion = document.getElementsByName("txtposicion3");
    var cantidad1 = document.getElementsByName("txtcantidad1");
     var posicion1 = document.getElementsByName("txtposicion1");
    
            var c=[];
            var c1=[];
           
            
            for (i = 0; i <cantidad.length; i++) { 
             c[i]=cantidad[i].value;
            
            }
           
             for (i = 0; i <cantidad1.length; i++) { 
             c1[i]=cantidad1[i].value;
            }
               
            
            var p=[];
            var p1=[];
            
            for (i = 0; i <posicion.length; i++) { 
             p[i]=posicion[i].value;
           
            }
            for (i = 0; i <posicion1.length; i++) { 
             p1[i]=posicion1[i].value;
             
            }
             
           
            
	$.post('libre/desmenu_ope.php', 
		{	
                    cantidad1       :c,
                    cantidad2       :c1,
                  
                    posicion1       :p,
                    posicion2       :p1,
                   
		},
		function (data){
                  
                 //  alert(data);
                   var id =data.substring(8)
                   var menuid=data.substring(8,6);
                  var cantidad = data.substring(4,2);
                  var resultado = data.substring(0,2);
                   var precio = data.substring(6,4);
                
               //  alert(resultado);
                // alert(cantidad);
              //  alert(data);
            //   alert(precio);
               
                 // alert(menuid);
                  // alert(id);
                 
                
			if(resultado =='ok'){
                                
				
                                 form_pedido_reg.txtplacan.value=cantidad;
                                 form_pedido_reg.txtplato.value='Menu';
                                 form_pedido_reg.txtidplato.value=menuid;
                                 form_pedido_reg.txtid.value=id;
                                 form_pedido_reg.txtprecio.value=parseFloat(precio).toFixed(2);
                                 
                                $('#menupedido').modal('hide');
			}else{
                           alert(data);
				
                             //  load_div('menu_modificar', 'menu/menu_pre_modificar.php?idmenu='+menuid);
                                
			}
		}
	);
}
function agregar_pedido(){
                    var cantidad=form_pedido_reg.txtplacan;
                    var nombre  =form_pedido_reg.txtplato;
                    var idplato =form_pedido_reg.txtidplato;
                    var precio  =form_pedido_reg.txtprecio;
                    var id      =form_pedido_reg.txtid;
                    var mesa    =form_pedido_reg.txtidmesa;
            
	$.post('libre/detalle/agregar_plato.php', 
		{	
                    cantidad       :cantidad.value,
                    nombre         :nombre.value,
                    idplato        :idplato.value,
                    id             :id.value,
                    precio         :precio.value
                  
		},
		function (data){
                                          
                if(data =='ok'){
                               
                             load_div('modal_menu', 'libre/menu_reg.php?q='+mesa.value);
                               load_div('menu_pedido', 'libre/menu.php');
                                $('#menupedido').modal('hide');
                            document.getElementById("form_menupedido_reg").reset();
                              
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);
}
function pedido_entrada_reg(){
   var cantidad = document.getElementsByName("txtcantidad");
    var posicion = document.getElementsByName("txtposicion");
    // var nombre = document.getElementsByName("txtnombre");
    //  var precio = document.getElementsByName("txtprecio");
     var mesa    =form_pedido_reg.txtidmesa;
           var c=[];
          for (i = 0; i <cantidad.length; i++) { 
             c[i]=cantidad[i].value;
            
            }
            
             var p=[];
           
            for (i = 0; i <posicion.length; i++) { 
             p[i]=posicion[i].value;
           
            }
            	$.post('libre/carta/pedido_reg.php', 
		{	
                    c     :c,
                    p     :p
                  
		},
		function (data){
                                          
                if(data =='ok'){
                                
                            load_div('modal_menu', 'libre/menu_reg.php?q='+mesa.value);
                               
                                $('#cartapedido').modal('hide');
                                 $('#entrada').modal('hide');
                                 $('#segundo').modal('hide');
                                 $('#postre').modal('hide');
                                 $('#bebida').modal('hide');
                                 
                      document.getElementById("form_pedidoentrada_reg").reset();
                       document.getElementById("form_pedidopostre_reg").reset();
                        document.getElementById("form_pedidosegundo_reg").reset();
                        
                       
                    }else{
                           
            alert(data);
                           
                                
			}
		}
                        
	);
      
    
      
}
function pedido_bebida_reg(){
   var cantidad = document.getElementsByName("txtcantidad");
    var posicion = document.getElementsByName("txtposicion");
    // var nombre = document.getElementsByName("txtnombre");
    //  var precio = document.getElementsByName("txtprecio");
     var mesa    =form_pedido_reg.txtidmesa;
           var c=[];
          for (i = 0; i <cantidad.length; i++) { 
             c[i]=cantidad[i].value;
            
            }
            
             var p=[];
           
            for (i = 0; i <posicion.length; i++) { 
             p[i]=posicion[i].value;
           
            }
            	$.post('libre/carta/bebida_reg.php', 
		{	
                    c     :c,
                    p     :p
                  
		},
		function (data){
                                          
                if(data =='ok'){
                                
                               load_div('modal_menu', 'libre/menu_reg.php?q='+mesa.value);
                             
                               $('#cartapedido').modal('hide');
                                 $('#entrada').modal('hide');
                                 $('#segundo').modal('hide');
                                 $('#postre').modal('hide');
                                 $('#bebida').modal('hide');
                                   c.length=0;
                                   p.length=0;
			
                     document.getElementById("form_pedidobebida_reg").reset();
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);
      
            
      
}
function pedido_reg(){
                     var fecha=form_pedido_reg.txtfecha;
                   // var cliente  =form_pedido_reg.txtidpersona;
                    var empleado =form_pedido_reg.txtidempleado;
                    var mesa =form_pedido_reg.txtidmesa
                    
       //              if( cliente.value == "" ) {
	//	alert('Ingrese cliente');
	//	return false;
     //  }
                    if( fecha.value == "" ) {
		alert('Ingrese fecha');
		return false;
       }
                         if( empleado.value == "" ) {
		alert('Ingrese empleado');
		return false;
       }
	$.post('libre/pedido_ope.php', 
		{	
                   // cliente  :cliente.value,
                    fecha    :fecha.value,
                    empleado :empleado.value,
                    mesa     :mesa.value
                  
		},
		function (data){
                                   
                if(data =='ok'){
                                alert("SU REGISTRO SE GUARDO CORRECTAMENTE");
                             load_div('contents', 'libre/mozo_piso.php');
                             $('#menu').modal('hide');
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);   
}
function pago_reg(pedido){
                     var total=form_pago_reg.txttotal;
                  
                    var tppago =form_pago_reg.cbtppago;
                    var cliente =form_pago_reg.txtidcliente
                    
  
                   if( total.value == "" ) {
		alert('Ingrese total ha pagar');
		return false;
       }
                    if( tppago.value == "Seleccionar" ) {
		alert('Ingrese ingrese Tipo de Comprobante');
		return false;
       }
                         if( cliente.value == "" ) {
		alert('Ingrese Cliente');
		return false;
       }
	$.post('pago/pago_ope.php', 
		{	
                   // cliente  :cliente.value,
                  pedido:pedido,
                  total:total.value,
                  tppago:tppago.value,
                  cliente:cliente.value,
                  
		},
		function (data){
                                   
                if(data =='ok'){
                                alert("SU REGISTRO SE GUARDO CORRECTAMENTE");
                             load_div('contents', 'pago/mozo_piso.php');
                             $('#ver').modal('hide');
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);   
}
function cliente_reg(){
    var persona =  document.form_cliente_reg.txtidcliente;
                    
  
                   if( persona.value == "" ) {
		alert('Ingrese persona');
		return false;
       }
                    
       
	$.post('cliente/cliente_ope.php', 
		{	
                   // cliente  :cliente.value,
                  persona:persona.value,
                  
		},
		function (data){
                                   
                if(data =='ok'){
                                alert("SU REGISTRO SE GUARDO CORRECTAMENTE");
                             load_div('contenido', 'cliente/cliente_pre_list.php?q=');
                             $('#persona').modal('hide');
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);   
}

function cliente_modificar(cliente){
    var persona =  document.form_cliente_mod.txtidcliente;
                    
  
                   if( persona.value == "" ) {
		alert('Ingrese persona');
		return false;
       }
                    
       
	$.post('cliente/cliente_pre_modificar_op.php', 
		{	
                  cliente  :cliente,
                  persona:persona.value,
                  
		},
		function (data){
                                   
                if(data =='ok'){
                                alert("SU REGISTRO SE ACTUALIZO CORRECTAMENTE");
                             load_div('contenido', 'cliente/cliente_pre_list.php');
                             load_div('lista_personac', 'cliente/cliente_listar.php?q=');
                             $('#personamod').modal('hide');
			}else{
                           
            alert(data);
                           
                                
			}
		}
	);   
}