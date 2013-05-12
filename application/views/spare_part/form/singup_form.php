<h2>REGISTRAT</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div id="mensaje"></div>
<form id="registrer" action="" method="post" accept-charset="utf-8">
	<fieldset id="user_field">
	<legend>New Acount</legend>
	<label for="user">Nom de usuari</label>
		<input type="text" id="user" name="user"  placeholder="Id">
	<label for="mail">M@il</label>
		<input type="email" id="mail" name="mail"  placeholder="Tu @mail">
		<label for="pass">Password</label>
		<input type="password" id="pass" name="pass"  placeholder="Contraseña">
		<label for="passconf">Repeat-password</label>
		<input type="password" id="passconf"   placeholder="Confirma tu contraseña">		
	</fieldset>
	<fieldset>
	<legend>Yours data</legend>
		<label for="nom">Nom</label>	
		<input type="text" id="nom" name="nom" placeholder="Tu nombre">
		<label for="cognom">Cognom 1</label>
		<input id="cognom" type="text" id="cognom" name="cog" placeholder="Tu apellido">
		<label for="cognom2">Cognom 2</label>
		<input id="cognom2" type="text" id="cognom2" name="cog2" placeholder="Tu apellido 2">
		<label for="">Data Nacimiento</label>
		<?=add_select_day()?>
		<label for="confir_license">Acepto condiciones de servicios</label>
		<input id="confir_license" type="checkbox" name="license" value="s" requeried>
	</fieldset>
	<input type="submit" value="Registrar">
</form>
<script type="text/javascript">

  $('#registrer').submit(function (evt){

           	var id_m = $('#user').val();
 		    var cla=$('#pass').val();
			var c_clv=$('#passconf').val();
  
if((cla==c_clv)&&cla.length>6){
	
 if(id_m.length>4){
 	 if(true){
  			 var datos=$('#registrer').serialize();
          	  $.ajax({
              		  type:"POST",
              		  url:"/sonormap/index.php/user/registro",
               			 data:datos,
             		   success: function(respuesta){
                    
                  					  $('#mensaje').text(respuesta);
                   					/*  $('#registrer').each (function(){
                                    						 this.reset();
                                              					  });*/
                    				         
              										  }
           				 });
          	         }else{
          	         	$('#mensaje').text("Has de aceptar el contrato de condiciones.");
          	         }
     			   }else{

        				$('#mensaje').text("tu ID es muy corta. ha de tener más de 6 caracteres.");
      					  }
      		  }else{
              
         	 $('#mensaje').text("las claves no son identicas o es muy corta (más de 6)");
      			   }   
     return false;
   });
    </script>
