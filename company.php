<!DOCTYPE html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/styleCompany.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8">
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/scripts.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		naviFirst();
		setTimeout(function(){naviLater()},600);
		$("#blackbg1").animate({width:"1050px"},1500,function(){animDetails()});
		setTimeout(function(){$("#blackbg2").animate({width:"100%",marginRight:"0"},1500,function(){animateFooter()});},3500)
		
		$(".navi ul li a").click(function(e){
			link = this.href;
			var timer = 0;
			e.preventDefault();
			if (link.indexOf("company.php") != -1){
				return;
			}
			unloadNavi();
			setTimeout(function(){$(".clients ul li").animate({marginLeft:"50px"},300).fadeOut(200);},timer+800);
			setTimeout(function(){$("#blackbg1 h2").animate({left:"-460px"},400,function(){unloadDetails()});},timer+800);
			// setTimeout(function(){unloadDetails()},timer+800);
			setTimeout(function(){unloadFooter()},timer+800);
			// setTimeout(function(){window.location = link;},timer+2000);
		});
		
		function unloadDetails(){
			$("#blackbg1").animate({marginTop:"300px"},800);
			$(".details").slideDown();
			$(".details").animate({height:"0"},800,function(){unloadblackbg()} );
		}
		function unloadblackbg(){
			$("#blackbg1").animate({marginLeft:"650px",width:"550px"},800).animate({width:"250px"},800).animate({height:"0",width:"0"},800);
			$("#blackbg2").animate({marginLeft:"650px",width:"550px"},800).animate({width:"250px"},800).animate({height:"0",width:"0"},800,function(){window.location = link;});
		}
		function animDetails(){
			$("#frstLine").fadeIn(800,function(){$("#scndLine").fadeIn(800,function(){$("#thirdLine").fadeIn(800);});}).delay(1800);
		}
	});
	</script>
</head>
<body onload="">
	<?php 
	$pageName = "Company";
	include('header.php');
	 ?>
	<!-- content starts here -->
	<div class="content">
		<div id="blackbg1" class="blackbg">
			<h2>THE COMPANY</h2>
		</div>
		<div class="details">
			<p id="frstLine">L&#8217;noir represents the physical rendering of ideas, thoughts &#038; emotions through a collaborative vision of integrity and most of all beauty. </p>
			<p id="scndLine">Liberated from a world of established visions- L&#8217;noir is both raw and innovative-designed for those who are looking for anything but mainstream. </p>
			<p id="thirdLine">Experimenting with mixed materials and a non-kosher methodology- all private label collections bare truth to the sophistication and elegance accompanied by all who dare to embrace.</p>
		</div>
		<div id="blackbg2"></div>
	</div>

	<!-- content ends here -->
		<?php include 'footer.php';
		?>
</body>