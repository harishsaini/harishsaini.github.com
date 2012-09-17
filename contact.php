<!DOCTYPE html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<!-- <link rel="stylesheet" href="css/styleCompany.css" type="text/css" media="screen" charset="utf-8"> -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="css/contact.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/scripts.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		naviFirst();
		setTimeout(function(){naviLater()},600);
		$(".leftbox").animate({width:"33em"},1100);
		$(".leftbox").animate({width:"31em"},"slow",function(){animRight()}).delay(1300);
		// setTimeout(function(){animRight()},1500);
		setTimeout(function(){animateFirstLine()},1800);
		setTimeout(function(){animateSecondLine()},2000);
				
		// functions
		
		function animRight(){
			$(".blackbox").animate({width:"365px"},2800);
			$("#blackbox1").animate({marginTop:"0px"},800);
			$("#blackbox2").animate({marginTop:"20px"},800);
			$("#blackbox3").animate({marginTop:"20px"},800);
			setTimeout(function(){$(".mail").fadeIn(800,function(){animAddress()});},3000);
		}
		function animAddress(){
			$("#nyo").animate({width:"190px"},1800,function(){$("#canal").fadeIn(1); 
			$("#canal").animate({width:"210px"},800,function(){animNy10()}  );});
		}
		function animNy10(){
			$("#ny10").fadeIn(1); $("#ny10").animate({width:"210px"},800,function(){animPhone()} );
		}
		function animPhone(){
			$("#addrT").fadeIn(1); $("#addrT").animate({width:"10px"},800,function(){$("#phone").fadeIn(1); $("#phone").animate({width:"210px"},800,function(){ animateFooter();});});
		}
	});

	</script>
</head>
<body onload="">
	<!-- navi starts here -->
	<?php
	$pageName = "Contact Us";
	include 'header.php';
	?>
	<!-- navi ends here -->

	<!-- content starts here -->
	<div class="cnt">
		<div Class="leftbox">
			<!-- <p>con</p>
			<p>TACT</p> -->
			<div class="c">
				<img src="images/c.png" alt="C">
			</div>
			<div class="o">
				<img src="images/o.png" alt="O">
			</div>
			<div class="n">
				<img src="images/n.png" alt="N">
			</div>
			<div class="t">
				<img src="images/t.png" alt="T">
			</div>
			<div class="a">
				<img src="images/a.png" alt="A">
			</div>
			<div class="c1">
				<img src="images/c1.png" alt="C">
			</div>
			<div class="t1">
				<img src="images/t.png" alt="T">
			</div>
		</div>
		<div class="rightCnt">
			<div id="blackbox1" Class="blackbox"></div>
			<div class="mail">
				<span>INQUIRIES</span><span class="detail"><a href="mailto:info@lnoir.com">INFO@LNOIR.COM</a></span>
			</div>
			<div id="blackbox2" Class="blackbox"></div>
			<div class="mail">
				<span>SALES</span><span class="detail"><a href="mailto:sales@lnoir.com">SALES@LNOIR.COM<br> (+1) 347 560 0073</a></span>
			</div>
			<div id="blackbox3" Class="blackbox"></div>
			<div class="mail">
				<span>PRESS</span><span class="detail"><a href="mailto:maria@lnoir.com">MARIA@LNOIR.COM</a></span>
			</div>
			<div class="address">
				<span id="nyo">NEW YORK CITY OFFICE</span><br >
				<span id="canal">332 CANAL STREET SUITE 6B</span><br >
				<span id="ny10">NEW YORK CITY, NY 10013</span><br >
				<!-- <p id="canal">332 CANAL STREET SUITE 6B</p>
								<p id="ny10">NEW YORK CITY, NY 10013</p> -->
				<span id="addrT">T</span>
				<span id="phone">(+1) 347 560 0073</span>
			</div>
		</div>
	</div>
	<!-- content ends here -->
		<?php include 'footer.php';
		 ?>
</body>