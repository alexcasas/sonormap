<div id="input_form">
	<h2>Introdiu a nou so</h2>
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<div id="primer">
     <form>
     	<input type="text" id="titol" name="titol" placeholder="titulo de la entrada">
     	<textarea id="description" name="description"></textarea>
     	<imput type="submint" value="next">
     </form>
    </div>

    <div id="segon">
            <div id="choose_map" style="height:200px; width:400px;">
            </div>
              <script >
  

  $(window).ready(function(){
$("#choose_map").gMap({
zoom:15 
});
});
 </script>
    </div>
    <div id="tercer">
     <form>
     	<input type="text" id="titol" name="titol" placeholder="titulo de la entrada">
     	<textarea id="description" name="description"></textarea>
     	<imput type="submint" value="next">
     </form>
    </div>
    <div id="cuart">
    	<form>
     	<input type="file" id="imagen" name="imagen" >
     	<input type="file" id="audio" name="audio" >
     	<imput type="submint" value="next">
     </form>

    </div>


</div>