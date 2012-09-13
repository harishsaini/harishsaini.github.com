function naviFirst(){
	$(".info").fadeIn();
	$(".cntct").fadeIn();
	$(".info").animate({top:"55px"});
	$(".cntct").animate({top:"55px"});
	$(".info").animate({top:"35px"});
	$(".cntct").animate({top:"35px"});
	$(".info").animate({top:"40px"});
	$(".cntct").animate({top:"40px"});
}
function naviLater(){
	$(".home").fadeIn();
	$(".cmpny").fadeIn();
	$(".clnts").fadeIn();
	$(".home").animate({top:"55px"});
	$(".cmpny").animate({top:"55px"});
	$(".clnts").animate({top:"55px"});
	$(".home").animate({top:"35px"});
	$(".cmpny").animate({top:"35px"});
	$(".clnts").animate({top:"35px"});
	$(".home").animate({top:"40px"});
	$(".cmpny").animate({top:"40px"});
	$(".clnts").animate({top:"40px"});
}
function animateFooter(){
	$(".footer").fadeIn();
	$(".footer").animate({top:"97%"});
}
function animateFirstLine(){
	$(".leftbox .c").fadeIn();
	$(".leftbox .c").animate({marginTop:"0"},1100);
	$(".leftbox .o").fadeIn();
	$(".leftbox .o").animate({marginTop:"-200px"},1100);
	$(".leftbox .n").fadeIn();
	$(".leftbox .n").animate({marginTop:"-200px"},1100);
}
function animateSecondLine(){
	$(".leftbox .t").fadeIn();
	$(".leftbox .t").animate({marginTop:"0"},1100);
	$(".leftbox .a").fadeIn();
	$(".leftbox .a").animate({marginTop:"-177px"},1100);

	$(".leftbox .c1").fadeIn();
	$(".leftbox .c1").animate({marginTop:"-177px"},1100);
	$(".leftbox .t1").fadeIn();

	$(".leftbox .t1").animate({marginTop:"-177px"},1100);
}
function unloadNavi(){
	$(".navi ul li a").animate({top:"60px"},400);
	$(".navi ul li a").fadeOut(400);
}
function unloadFooter(){
	$(".footer").animate({top:"100%"},200);
	$(".footer").fadeOut(800);
}