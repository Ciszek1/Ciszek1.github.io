<?
	$e = 1;
	$r = 100;
	$g = ($e/$r)*100;
	echo $g;
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var e = 100;
		var f = 1000;
		setInterval(function xd(){
		var h = (e/f)*100;
		document.getElementById('file').value = h;
		console.log(h);
		if (e > "1000") {
			e = 0;
		}else{
			e = e + 0.1;
		}
		
		}, 0.10);
	</script>
</head>
<body>
<progress style="width: 1920px; height: 10%" id="file" value="" max="100" w> 32% </progress>
</body>
</html>