
// POP UP LOGIN
$('#myModal').on('shown.bs.modal', function () {
    $('#modal').trigger('focus')
  });
  

//  GOOGLE MAP 
  var marker;
  function initMap() {
    
    var lyon = {lat: 45.75, lng: 4.85};
    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    
    var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 7, center: lyon});
    

      var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>Lyon</p>'+
      '<p>Attribution: Lyon, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Lyon</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';


      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      marker = new google.maps.Marker({
        position: lyon, 
        map: map,
        animation: google.maps.Animation.DROP,
        icon : image,
        title: "Lyon",
        draggable:true
      });
      marker.addListener('click', toggleBounce);
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });

    }
    function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }
    

    