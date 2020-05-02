<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var rolZ,
			rolX,
			rot,
			alt,
			spe,
			far = 0,
			s1 = 0,
			e1 = 0,
			e2 = 0,
			ful1 = 1000,
			ful2 = 500;
		setInterval(function rf(){
			alt = 1300;
			if (alt > 1000 && alt < 2000) {
				console.log("rotacja: 1");
				rot = 0;
				rolZ = 0;
				rolX = 20;
			}
			if (alt > 10000 && far > 1) {
				console.log("Suctes: Separation Faring")
				far = 1;
			}
			if (ful1 < 200 && s1 > 1) {
				e1 = 0;
				s1 = 1;
				e2 = 1;
				console.log("Suctes: Separation 1")
			}
		}, 1000)
	</script>
</head>
<body>

</body>
</html>