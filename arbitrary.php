<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
<head>
<title>Arbitrary This!!1</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
	<style>

	</style>
	
	<script  type="text/javascript">
	$(document).ready(function() {
		var url='http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=63';
		$.get(url, function (data) {
			console.log(data);
		});
	});
	</script>
</body>
</html>