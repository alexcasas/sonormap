<p id="texto">Ops no funcionó</p>
<?=$mensaje?>
<p>intentalo de nuevo o llama el administrador</p>
<div id="mensaje_ajax"></div>

<form action=<?='"'.site_url('user/login').'"'?> method="post" accept-charset="utf-8">
		<input type="text" id="usr_id" name="usr_id" placeholder="nom usuari">
		<input type="password" name="password" value="" placeholder="password">	
		<input type="submit" name="" value="Entrar">					
</form>