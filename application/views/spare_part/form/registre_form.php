<script>

function do_mapa(){
$("#choose_map").gMap({latitude: 40.78,
     longitude: 2.5,
zoom:5
}
);
$("#choose_map").gMap(
'mapclick',function(latlng){
    console.log(latlng);
  $("#choose_map").gMap('addMarker', { latitude: 40.78, longitude: 2.6 });
}
);
}

  var titulo;
  var description;
function comprobar_1()
{
    titulo= $('#titol').val();
    description=$('#description').val();
    if (titulo.length >0 && (description.length>0 && description.length < 140)) {
           $("#mensaje").text(" sigamos;");
           var request = $.ajax({
url: <?='"'.site_url("list/check_title").'"'?>,
type: "POST",
data: {'titulo' :titulo }
});

request.done(function(msg) {
$("#primer").html( msg );
});
request.fail(function(jqXHR, textStatus) {
alert( "Request failed: " + textStatus );
});
    } else{
        $("#mensaje").text(" no vamos bien;");
    };
}

 </script>
<div id="input_form">
    <h2>Introdiu a nou so</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div id="mensaje"></div>
    <div id="primer">
  <form id="form1">
        <fieldset>
        <legend> titulo y descripción.</legend>
            <input type="text" id="titol" name="titol" placeholder="titulo de la entrada">
            <textarea id="description" name="description"></textarea>
            <input type="button" value="next" onclick="comprobar_1()">
        </fieldset>
     </form>
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
