$(document).ready(function(){
	$("#imgSmall").click(function (){		                                        
		$("#imgBig").attr("src","../images/crepe_recipie2-smaller.png");
		$("#overlay").show();
		$("#overlayContent").show();
	});
	$("#imgBig").click(function(){
		$("#imgBig").attr("src", "");
		$("#overlay").hide();
		$("#overlayContent").hide();
	});
});