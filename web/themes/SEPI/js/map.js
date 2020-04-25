jQuery(document).ready(function($){

    /*
    *
    * Inicio del mapa para las empresas
    *
    */
    var position = {lat: 40.0000000, lng: -4.0000000};
    var map = new google.maps.Map(document.getElementById('companies-position-map'), {
      zoom: 7,
      center: position
    });
    //Para cada una de las empresas
    var nombre;
    var direccion;
    var icon = "/sites/default/files/2017-08/maps-and-flags_0.png";
    var contenido_marker;
    var infowindow;

    $('.empresa-resultados').each(function(){
      nombre = $(this).find('.nombre-empresa').text();
      direccion = $(this).find('.direccion-empresa').text();
      url_imagen = $(this).find('.imagen-empresa').attr("src");

      codeLatLng(map, icon, nombre, url_imagen, direccion, function(addr){});

    });

    /*
    *
    * Fin del mapa para las empresas
    *
    */
});

function codeLatLng(map, icon, nombre, url_imagen, direccion, callback){
  var geocoder = new google.maps.Geocoder();
  var marker;

  if(geocoder){
    geocoder.geocode( { 'address': direccion}, function(results, status,) {
      //var array = [results[0].geometry.location.lat(), results[0].geometry.location.lng()];
      var position = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
      //callback(array);

      contenido_marker = "<div><h3>"+nombre+"</h3><div class='row'><img src="+url_imagen+" class='col col-md-3'/><p class='col col-md-9'>"+direccion+"</p></div></div>";

      infowindow = new google.maps.InfoWindow({
        content: contenido_marker,
        maxWidth: 350
      });

      marker = new google.maps.Marker({
        position: position,
        map: map,
        icon: icon,
        info: contenido_marker
      });

      marker.addListener('click', function() {
        infowindow.setContent(this.info);
        infowindow.open(map, this);
      });

      marker.setMap(map);
    });
  }
}
