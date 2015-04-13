<!doctype html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="page de contact william servenay" />
    <meta name="description" content="Ici c'est le meilleur moyen de contacter William" />

	<link href='http://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/animate.min.css">
	<script src="js/modernizr.custom.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC0xalk4wJ_gvU5LEnXuO5VnQq3XjajmpQ&sensor=false&extension=.js'></script> 
	<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(49.040066,3.97667),
            zoom: 14,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            },
            scaleControl: false,
            scrollwheel: true,
            panControl: false,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: true,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
    {
        "featureType": "water",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b5cbe4"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "color": "#efefef"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#83a5b0"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#bdcdd3"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e3eed3"
            }
        ]
    },
    {
        "featureType": "administrative",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 33
            }
        ]
    },
    {
        "featureType": "road"
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 20
            }
        ]
    },
    {},
    {
        "featureType": "road",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    }
],
        }
        var mapElement = document.getElementById('Homemap');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Sweet Home', 'C\'est ici que tout à commencé !', '0651061879', 'william.servenay@gmail.com', 'www.william-servenay.com', 49.0366618, 3.9775439]
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
			if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
            marker = new google.maps.Marker({
                icon: 'https://mapbuildr.com/assets/img/markers/solid-pin-red.png',
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web);
        }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web) {
      google.maps.event.addListener(marker, 'click', function() {
            var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+telephone+"<p><a href='mailto:"+email+"' >"+email+"<a></div>";
            iw = new google.maps.InfoWindow({content:html});
            iw.open(map,marker);
        });
    }
}
</script>
	
  	
	<title>William Servenay | Contact</title>
</head>

<body>

<?php include('frags/header.php'); ?>
<ul class="cd-container">	
<div class="contact-row"> 
<section id="interet">
	
		<ul class="contactHL">
			<li> 
				<span class="icon-phone"></span>
				<h2 class="animated zoomIn">Comment ?</h2>
				<p>06.51.06.18.79</p>
			</li>
			<li>
				<span class="icon-location"></span>
				<h2 class="animated zoomIn">Où ?</h2>
				<p> 10 avenue Beethoven </br> 51200 Épernay </p>

			</li>
			<li>
				<span class="icon-mail"></span>
				<h2 class="animated zoomIn">E-mail</h2>
				<p> william.servenay@gmail.com </p>
			</li>
<!--- MAP --->
<div id='Homemap'></div>
<!---/ MAP --->
		</ul>	
		
</section>

<!-- FORMULAIRE -->
<div id="form-main">
<h2 class="animated zoomIn"> Un petit mot ? </h2>
  <div id="form-div">
    <form action="cible.php" method="POST" class="form" id="form1">
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="@Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
      </p>
      
      <div class="submit">
        <input type="submit" value="ENVOYER" id="button-blue"/>
        <div class="ease"></div>
      </div>
	</form>
  </div>
 </div>
 <!--/ FORMULAIRE -->

 </ul>

<?php include('frags/footer.php'); ?>