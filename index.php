<!DOCTYPE html>
<head >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$(".footer").slideDown();
		$("ul li").animate({marginLeft:"65px"},400).animate({marginLeft:"45px"}).animate({marginLeft:"55px"});
		$(".navi ul li a").click(function(e){
			var link = this.href;
			// alert(link);
			e.preventDefault();
			if (link.indexOf("index.php") != -1){
				return;
			}
			$(".navi ul").animate({top:"60%"},400);
			$(".navi ul").fadeOut(400);
			$(".footer").animate({bottom:"-15px"},200);
			$(".footer").fadeOut(800);
			setTimeout(function(){window.location = link;},2000);
		});
	});
	</script>
</head>
<body onload="">
	
	<?php
	$pageName = "Home";
	include 'header.php';
	include 'footer.php';
	?>
	
</body>