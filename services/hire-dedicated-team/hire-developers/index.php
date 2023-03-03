<?php require_once("../../../includes/config.inc.php"); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="hire cheap apps developer, affordable programmer, mobile applications, web apps, facebook apps, appstrophic, appstrophic uae, appstrophic dubai, appstrophic developer">
<meta name="Description" content="Hire the top developers of Dubai &amp; get your customized mobile applications, web &amp; Facebook apps developed by Appstrophic developers.">
<title>Hire Cheap Apps Developer| Affordable Programmers |Appstrophic Dubai</title>
<!--<link href="css/boilerplate.css" rel="stylesheet" type="text/css">-->
<link href="../../../css/StyleSheet.css" rel="stylesheet" type="text/css">
<link href="../../../css/liquid-slider.css" rel="stylesheet" media="screen" type="text/css">
<link href="../../../css/jquery.selectbox.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: Arial, "Arial Unicode MS", Helvetica, Sans-Serif;
}

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../../../js/respond.min.js"></script>
</head>
<body>
<div class="Cloud"></div>
<div class="CustomQuoteScroller">
<?php include("../../../includes/HelpForm.php"); ?>
<a href="javascript:;" class="btn openBtn"></a>
</div><!-- //.CustomQuoteScroller -->
<div class="gridContainer clearfix">
  <div id="InnerWrapper">
  	<div id="TopBar">
    	<header>
        	<div id="Logo"><a href="<?php echo BASE_URL; ?>"></a></div>
            <?php include("../../../includes/TopNav.php"); ?><!-- //TopNav -->
        </header><!-- //header -->
    </div><!-- //TopBar -->
    <div class="MainBanner">
    	<center> <img src="../../../../../images/banners/hire developers.jpg"></div></center>
    </div><!-- //SlideShowContainer -->
     <section>
    	<div class="FixedWrapper">
        	<div style="float:left; height:20px; border-bottom:1px solid #666; width:100%;"></div>
               <section id="Body">
                 <div class="ContentBlock" style="height:155px;">
                   <h1 style="font-size:36px"><strong>
                     <div class="colour">Hire Developers</div>
                   </strong></h1>
                   <p align="left">We provide the best skilled developers who develop high caliber mobile &web apps for our valuable customers. Appstrophic comprises of best teams of developers who are professional in building android, iPhone, Windows & web applications including <a href="../../facebook/app-development/index.php" style="color:#565143;font-weight:
bold;">facebook app development</a>. </p>
                 </div>
                 <div class="ContentBlock" style="height:205px;">
               	  <div class="ContentText">
                    	<h1>Mobile Developers</h1>
                		<p align="left">We offer the complete world of mobile application development as well as web application development including facebook apps to our clients. We deal in every platform of the mobile, whether you need the <a href="../../mobile/iphone-app-development/index.php" style="color:#565143;font-weight:
bold;">custom iPhone app development</a>, Android mobile apps or application for mobile windows, our teams of mobile developers are here to solve all of your worries.</p>
                   </div>
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/mobile developers.png"></div>
                </div>
                <div class="ContentBlock" style="height:265px;">
                	<div class="ContentText" style="right:10px;">
                        <h1>Web Developers</h1>
                        <p align="left">Our <a href="../../website-design/index.php" style="color:#565143;font-weight:
bold;">web development company in Dubai</a> is run by the teams of skilled & professional developers who know how to deliver your work in effective way. They are fully updated to the latest technologies of web development. Whether you want customized website, web apps or CMS enabled sites, our developers will take care of your problems.
 If you know unique & helpful idea which would help people around you or even around the planet, then it’s time to hire our teams to get your job done with the magical wand of Appstrophic.
</p>
                    </div>
                    <div class="ContentImage" style="left:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/web developers.png"></div>
                </div>
                
                <div class="LiveChatArea">
                	<div class="ImgHolder"><a href="#"><img src="../../../../../images/livechat.png" alt="Live Chat"></a></div>
                </div><!-- //.LiveChatArea -->
            </section>
            <?php include("../../../includes/Sidebar.php"); ?><!-- //Sidebar -->
        </div><!-- //.FixedWrapper -->
    </section><!-- //Fixed -->
    <?php include("../../../includes/footer.php"); ?><!-- //footer -->
  </div><!-- //InnerWrapper -->
</div><!-- //gridContainer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../../../js/jquery.selectbox-0.2.min.js"></script>
<script>

$(".openBtn").click(function(){
	$(".CustomQuoteScroller").animate({
		"margin-left":"0px",
		"cursor":"default"
		});
	$(".btn").addClass("closeBtn");
	$(".btn").removeClass("openBtn");
	$(".Cloud").fadeIn("slow");
});
$(".Cloud").click(function() {
    $(this).fadeOut("slow");
	$(".CustomQuoteScroller").animate({
		"margin-left":"-320px"
		});
	$(".btn").addClass("openBtn");
	$(".btn").removeClass("closeBtn");
});
$(".closeBtn").click(function() {
    $(".Cloud").fadeOut("slow");
	$(".CustomQuoteScroller").animate({
		"width":"70px"
		});
	$(".btn").addClass("openBtn");
	$(".btn").removeClass("closeBtn");
});

$("#services ul").hover(function(){
	$("#services a:first").addClass("active");
	});
$("#services ul").mouseleave(function(){
	$("#services a:first").removeClass("active");
	});

</script>
<script type="text/javascript">
	$(function () {
		$("#country").selectbox();
	});
</script>
<script>
function submitHelpForm(){
	var name = $("#name").val();
	var email = $("#email").val();
	var question = $("#question").val();
	var code = $("#code").val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
	if(name == ""){
		$(".ValidateError").remove();
		$("#name").after("<div class='ValidateError'>You must enter your full name</div>");
	}else if(email == ""){
		$(".ValidateError").remove();
		$("#email").after("<div class='ValidateError'>You must enter your email address</div>");
	}else if(!emailReg.test(email)){
		$(".ValidateError").remove();
		$("#email").after("<div class='ValidateError'>Enter a valid email address</div>");
	}else if(question == ""){
		$(".ValidateError").remove();
		$("#question").after("<div class='ValidateError'>You must enter a question</div>");
	}else if(code == ""){
		$(".ValidateError").remove();
		$(".SubmitButton").after("<div class='ValidateError'>Invalid code</div>");
	}else{
		$.post("../../../js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post("../../../js/phps/submitHelpForm.php", {nameVal: name, emailVal: email, questionVal: question}, function(response){
					if(response == "sent"){
						alert("Message has been sent");
					}
					});
			}else{
				$(".ValidateError").remove();
				$(".SubmitButton").after("<div class='ValidateError'>Invalid code</div>");
			}
			});
	}
}
function submitQuoteForm(){
	var name = $("#q_name").val();
	var email = $("#q_email").val();
	var company = $("#q_company").val();
	var phone = $("#q_phone").val();
	var desc = $("#q_desc").val();
	var code = $("#q_code").val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
	if(name == ""){
		$(".ValidateError").remove();
		$("#q_name").after("<div class='ValidateError'>You must enter your Full Name</div>");
	}else if(email == ""){
		$(".ValidateError").remove();
		$("#q_email").after("<div class='ValidateError'>You must enter your Email Address</div>");
	}else if(!emailReg.test(email)){
		$(".ValidateError").remove();
		$("#q_email").after("<div class='ValidateError'>Enter a valid Email Address</div>");
	}else if(phone == ""){
		$(".ValidateError").remove();
		$("#q_phone").after("<div class='ValidateError'>You must enter a Phone Number</div>");
	}else if(desc == ""){
		$(".ValidateError").remove();
		$("#q_desc").after("<div class='ValidateError'>You must provide detail about your Project</div>");
	}else if(code == ""){
		$(".ValidateError").remove();
		$(".SubmitButton").after("<div class='ValidateError'>Invalid code</div>");
	}else{
		$.post("../../../js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post("../../../js/phps/submitQuoteForm.php", {nameVal: name, emailVal: email, companyVal: company, phoneVal: phone, descVal: desc}, function(response){
					if(response == "sent"){
						$(".ValidateError").remove();
						alert("Message has been sent");
					}
					});
			}else{
				$(".ValidateError").remove();
				$(".SubmitButton").after("<div class='ValidateError'>Invalid code</div>");
			}
			});
	}
}
</script>

</body>
</html>
