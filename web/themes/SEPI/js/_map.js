$(document).ready(function() {
    
    
     if ($("#googleMap").length) {
    


    var mapInfo = {
        zoom : 6,
        center: [40.455030, -3.736972],
        elements: [
            {'name':'Madrid','coords': [40.455030, -3.736972], 'content':'.content-1', 'type':'instituto'},
            {'name':'León','coords': [42.592977, -5.571044], 'content':'.content-2', 'type':'instituto'},
            {'name':'Ávila','coords': [40.698266, -4.685851], 'content':'.content-3', 'type':'grupo'},
            {'name':'Burgos','coords': [42.346278, -3.697783], 'content':'.content-4', 'type':'instituto'},
        ]
    };
     
    var labels = '1111111';
    var labelIndex = 0;
    
    var icons = {
        instituto: {
            url: '../images/instituto.png'
        },
        grupo: {
            url: '../images/grupo.png'
        }
    };
        
    var options = {
        zoom: mapInfo.zoom,
        center: new google.maps.LatLng(mapInfo.center[0], mapInfo.center[1]),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    },
        
    container = document.getElementById('googleMap'),
    map       = new google.maps.Map(container,options),
    elements  = [];

    mapInfo.elements.forEach(function(element, i){
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(element.coords[0], element.coords[1]),
            icon:  icons[element.type], 
            label: labels[i % labels.length],
            map: map
        });
        google.maps.event.addListener(marker, 'click', function() {
            showElement(element);
        });
    });

    function showElement(element){
        var
            content = document.querySelector(element.content),
            container = document.querySelector('.infoTable');
            $('.infoTable').scrollTop(0);
            $('.panel-heading').append( "<span class='close-div'>X</span>" );
            container.innerHTML = content.innerHTML;
            container.style.display='block';
        
        $(".close-div").click(function(){
            $(".infoTable").empty();
        });

    }
         
  
    
}
    
});
