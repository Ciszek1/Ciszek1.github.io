<?
$api = json_decode(file_get_contents("kontrol/dan.txt"));
$video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$api->Our->video.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="icon.ico">
	<style type="text/css">

	body{
	font-family: 'Roboto Slab', serif;
	font-weight: 700;
	background-color: #303030;
	}
	#Conterr{ 
	//background-image: url("https://spacelaunchnow-prod-east.nyc3.cdn.digitaloceanspaces.com/media/launcher_images/falcon25209_image_20190224025007.jpeg"); 
	transform: translate3d(0px, 0px, 0px);
	background-position: center center;
	background-size: cover;
	color: white;
	//height: 40vh;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	}
	#Nazwa{
		font-weight: 700;
		font-size: 3.3125rem;
		line-height: 1.15em;
	}
	h1{
		font-size: 3.3125rem;

	}
	h2{
		font-size: 2rem;
	}
	.hr{
		    max-width: 66.66667%;

	}
	#lim{
		    font-weight: 700;

	}
	#c1{
		padding-top: 20px;
	}
	#opis{
		width: 70%;
		float: left;
		text-align: center;
	}
	#innesta{
		float: left;
		text-align: center;

	}
	#nazwaOP{
		color: white;
		background-color: #eb4034;
	}
	#opiss{

	}
	</style>
	<title></title>
</head>
<body>
	<script type="text/javascript">
setInterval(async function str(){
const api = 'kontrol/dan.txt';
const apii = await fetch(api);
const appi = await apii.json();


document.getElementById("LM").innerHTML = appi.Our.rocket+" | "+appi.Our.name;
document.getElementById("opisss").innerHTML = appi.Our.description;


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
  document.getElementById("T").innerHTML = "T+ "+ days + ":" + hours + ":"
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
    document.getElementById("T").innerHTML = "T- "+ days + ":" + hours + ":"
    + minutes + ":" + seconds;
  }

var countDownDate = new Date(appi.Our.Staticdate).getTime();

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
  document.getElementById("sT").innerHTML = "Static Faire Test - T+ "+ days + ":" + hours + ":"
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
    document.getElementById("sT").innerHTML = "Static Faire Test - T- "+ days + ":" + hours + ":"
    + minutes + ":" + seconds;
  }

}, 1000)
	</script><center>

	<div id="all">
<div id="Conterr" data-parallax="true">
	<div id="c1">
		<h1>
			<div id="Nazwa">
				<div id="LM"></div>
	
			</div>
		</h1>
	<hr class="hr" style="background-color: white">
	
		<p id="lim">
			<h1><div id="T"></div></h1>
			<h2><div id="sT"></div></h2>
		</p>
	
</div>

<div id="opis">
	<div id="nazwaOP">
		<h1>OPIS</h1>
	</div>
	<div id="opiss"><div id="opisss"></div></div>
	<div id="nazwaOP"><h1>Video</h1></div>
	<div id="opiss"><? Echo $video ?></div>
</div>
<div id="innesta">
	<img src="LOGO bT.png" width="550px" height="100px"></img>
</div>
</div>
</center></body>
</html>