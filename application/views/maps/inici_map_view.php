
 <div id="map" style="height:480px;width:100%">..Loading</div>
  <script >
  var textHtml=" <p> y fue alli donde los hombres vacios encontraron la paz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el"+
  " r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué"+
  " allípaz y el r5egocijo de sus hermanos fué allípaz y el r5egocijo de sus hermanos fué allí</p><form action=\'\'method= \'post\' accept-charset=\'utf-8\'>"+
  "<input type=\"text\"  placeholder=\"registra\"></form>"+"";

  $(window).ready(function(){
$("#map").gMap({
markers: [{ latitude: 41.97, longitude: 2.78,html:textHtml}]
,maptype:google.maps.MapTypeId.HYBRID
,zoom:15 
});
});
 </script>