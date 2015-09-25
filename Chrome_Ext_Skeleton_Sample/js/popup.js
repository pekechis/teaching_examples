
//This function will draw the map where the selected bike station is
function drawMap(lat,long,text) {
  var myLatlng = new google.maps.LatLng(lat,long);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: text
  });
}

//This function recover data from the web service
function loadData() {
   $.ajax({
       url : "http://www.zaragoza.es/api/recurso/urbanismo-infraestructuras/estacion-bicicleta.json", 
   })
           .done(function(data) {
                var estaciones = data.result;
                console.log(estaciones);
                for (i=0; i<estaciones.length;i++) {
                   var text="";
                   text+="<a href='"+estaciones[i].uri+"' target=_blank>";
                   text+="<div class='estacion'>";
                   text+="<h4>ESTACION: "+estaciones[i].title+"</h4>";
                   text+="Bicis Disponibles: "+estaciones[i].bicisDisponibles;
                   text+=" Anclajes Disponibles: "+estaciones[i].anclajesDisponibles;
                   text+="<span class='latitud'>"+estaciones[i].geometry.coordinates[0]+"</span>";
                   text+="<span class='longitud'>"+estaciones[i].geometry.coordinates[1]+"</span>";
                   text+="</a>";
                   text+="</div>";
                   $("#resultados").append(text);
                   
                   $("div.estacion:odd").css("background-color", "#DDDDDD");
               }
               
           })
           .fail(function() {
               $("#resultados").append("<h2>Imposible recuperar los datos</h2>");
           });
}



//On Document ready
$(function() {
 
    //Binding click event to future data click() is direct binding and doesn't work here
    $("#resultados").on('click','.estacion',function() {
                            var latitud= $(this).children("span.latitud").text(); 
                            var longitud= $(this).children("span.longitud").text(); 
                            console.log("LATITUD:"+latitud+" LONGITUD:"+longitud);
                            //alert("LATITUD:"+latitud+" LONGITUD:"+longitud);
                            drawMap(latitud,longitud,$(this).children("h4").text());
    });
   
    loadData();
   
   $("#reload").click(function() {
      //Cleaning the 
      $("#resultados").empty();
      //Reloading data
      loadData();
   });
   
   
   
});
