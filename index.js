function initMap() {
    var myLatLng = {lat: 24.1820929, lng: -110.3025937}; // Coordenadas de Nueva York

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Nueva York'
    });

    var pin = document.createElement("div");
    pin.className = "pin";
    map.getDiv().appendChild(pin);

    var bounds = new google.maps.LatLngBounds();
    bounds.extend(marker.getPosition());
    map.fitBounds(bounds);
}
