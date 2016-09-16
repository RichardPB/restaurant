<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
          
	
 ?>	
<div >
	
                <div style=" width: 35%" class="panel panel-default">
                <div class="panel-heading">
                    <center>
                    <span class="glyphicon glyphicon-glyphicon glyphicon-th-list" aria-hidden="true">&nbsp;Seleccion</span> 
                    </center>
                </div>
                <div class="panel-body">
                     <button type="button" data-toggle="modal" data-target="#entrada" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;Entradas&nbsp;</span></button>
                     <br> 
                     <br> 
                     <button type="button" data-toggle="modal" data-target="#segundo" class="btn btn-primary" ><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;Segundos&nbsp;</span></button>
                    <br> 
                    <br> 
                     <button type="button" data-toggle="modal" data-target="#postre" class="btn btn-info" ><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;Postres&nbsp;&nbsp;</span></button>
                    <br> 
                    <br> 
                     <button type="button" data-toggle="modal" data-target="#bebida" class="btn btn-danger" ><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;Benidas&nbsp;&nbsp;</span></button>
                    
                    
                    
                </div>
                </div>
              
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
