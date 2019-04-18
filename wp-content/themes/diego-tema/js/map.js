function initMap() {
  var lugar = {lat: -3.846244, lng: -32.405424};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: {lat: -3.846000, lng:-32.405000}
    // mapTypeId: 'satellite'
  });

  var marker = new google.maps.Marker({
    position: lugar,
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP
  });

  marker.addListener('click', toggleBounce);

  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
}