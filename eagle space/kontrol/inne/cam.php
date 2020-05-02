<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	setInterval(async function str(){
	const api = 'http://ciszek.y0.pl/kontrol/dan.txt';
	const apii = await fetch(api);
	if (stary = apii.cam) {
		str()
	}
	const appi = await apii.json();
	var cami = '<iframe src="'+appi.cam+'" height="1920" width="1080"></iframe>'
	document.getElementById("cam").innerHTML = cami;
	var stary = appi.cam;
}, 1000)
	</script>
</head>
<body>
	<div id="cam"></div>
</body>
</html>