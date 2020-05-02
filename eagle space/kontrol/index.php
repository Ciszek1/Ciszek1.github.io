
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

	<!--<script src="js.js"></script>
	<script src="zegar.js"></script>-->
</head>
<body onload="str()">

	<script type="text/javascript">

    /*var map = L.map('map').setView([0, 0], 4);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiY2lzemVrMTAiLCJhIjoiY2s2M2piYTE2MDdvdDNubDJxdXFrZG40dyJ9.Mrs2KDYt8wQngQExQVszvw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
       maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);*/


setInterval(async function str(){
const api = 'dan.txt';
const apii = await fetch(api);
const appi = await apii.json();

document.getElementById("S2engine").innerHTML = "Engine status: "+appi.Stage2.engine;
document.getElementById("S2speed").innerHTML = "Speed: "+appi.Stage2.speed+"km/h";
document.getElementById("S2altitude").innerHTML = "Altitude: "+appi.Stage2.altitude+"km";
document.getElementById("S1speed").innerHTML = "Speed: "+appi.Stage1.speed+"km/h";
document.getElementById("S1altitude").innerHTML = "Altitude: "+appi.Stage1.altitude+"km";
document.getElementById("S1engine").innerHTML = "Engine status: "+appi.Stage1.engine;


var countDownDate = new Date(appi.Our.date).getTime();

// Update the count down every 1 second

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  if (hours < 10) {var hours = "0"+hours};
  if (minutes < 10) {var minutes = "0"+minutes};
  if (seconds < 10) {var seconds = "0"+seconds};



  // Output the result in an element with id="demo"
  document.getElementById("T").innerHTML = "T+ "/* + days + ":" */+ hours + ":"
  + minutes + ":" + seconds;
    
  if (distance < 0) {
      var countDownDate = new Date(appi.Our.date).getTime();

  // Update the count down every 1 second

    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance =  now - countDownDate;


    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if (hours < 10) {var hours = "0"+hours};
  if (minutes < 10) {var minutes = "0"+minutes};
  if (seconds < 10) {var seconds = "0"+seconds};

    // Output the result in an element with id="demo"
    document.getElementById("T").innerHTML = "T- "/* + days + ":" */+ hours + ":"
    + minutes + ":" + seconds;
  }



}, 1000)
</script>
<div class="dan">
	<h1>Telemetry:</h1>
  <h2>Stage 2:</h2>
	<div id="S2speed"></div>
	<div id="S2altitude"></div>
  <div id="S2engine"></div>
<h2>Stage 1:</h2>
  <div id="S1speed"></div>
  <div id="S1altitude"></div>
  <div id="S1engine"></div>
</div>
<div class="dan">
	<h1>Our:</h1>
	<div id="T"></div>
  <h2>Map:</h2>
  <div id='map' style='width: 400px; height: 300px;'></div>
</div>
<div class="dan">
	<h1>Cam:</h1>
	<div class="cam"><h2>CAM1</h2><iframe width="480" height="270" src="http://ustream.tv/embed/9408562" scrolling="no" allowfullscreen webkitallowfullscreen frameborder="0" style="border: 0 none transparent;"></iframe></div>
</div>




<div style="clear: both;"></div>
</body>
</html>