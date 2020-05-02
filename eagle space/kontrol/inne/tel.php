
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<title></title>
  <style type="text/css">
    body{
      font-family: 'Lato', sans-serif;
      font-size: 40px;
    }

  </style>
	<!--<script src="js.js"></script>
	<script src="zegar.js"></script>-->
</head>
<body onload="str()">

	<script type="text/javascript">
setInterval(async function str(){
const api = 'http://ciszek.y0.pl/eagle%20space/kontrol/dan.txt';
const apii = await fetch(api);
const appi = await apii.json();


document.getElementById("speed").innerHTML = "Speed: "+appi.Stage2.speed+"km/h";
document.getElementById("altitude").innerHTML = "Altitude: "+appi.Stage2.altitude+"km";
document.getElementById("name").innerHTML = appi.Our.name;



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

	<div id="speed"></div><br/><br/>
	<div id="altitude"></div><br/><br/>

	<div id="T"></div><br/><br/>
  <div id="name"></div><br/><br/>



<div style="clear: both;"></div>
</body>
</html>