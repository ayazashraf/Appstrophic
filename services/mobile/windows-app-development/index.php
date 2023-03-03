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
<meta name="Keywords" content="windows phone application, windows developer, windows ce, cross platform apps, appstrophic dubai, appstrophic developer, appstrophic windows developer, mobile apps developer, windows mobile developer">
<meta name="Description" content="Make your application popular by launching it on windows CE OS. Appstrophic windows developers build the best apps with total satisfaction of clients.">
<title>Windows Phone Applications Developers | Appstrophic Dubai</title>
<!--<link href="css/boilerplate.css" rel="stylesheet" type="text/css">-->
<link href="../../../css/StyleSheet.css" rel="stylesheet" type="text/css">
<link href="../../../css/liquid-slider.css" rel="stylesheet" media="screen" type="text/css">
<link href="../../../css/jquery.selectbox.css" rel="stylesheet" type="text/css">
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
    	<center><img src="../../../images/banners/windows.jpg"></div></center>
    </div><!-- //SlideShowContainer -->
    <section>
    	<div class="FixedWrapper">
        	<div style="float:left; height:20px; border-bottom:1px solid #666; width:100%;"></div>
                           <section id="Body">
                 <div class="ContentBlock" style="height:190px;">
                   <h1 style="font-size:36px"><strong>
                     <div class="colour">Windows App Development</div>
                   </strong></h1>
                   <p align="left">Have an idea for a Windows mobile application  or even html 5 app development? Contact us and have the best of the Windows  Phone App Developers bring your app idea to fruition. We have dabbled deep into  the Windows Store and have gained enough experience with our hands-on analysis  of the Windows experience. As such we bring to the table first-hand user  experience in regards to the development and design of the application</p>
                 </div>
                 <div class="ContentBlock" style="height:210px;">
               	  <div class="ContentText">
                    	<h1>Why Windows?</h1>
                		<p align="left">The Windows Phone is famous for one  especially unique feature, its beautiful user interface. And who is better, to  design beautiful software for a phone whose pride is in its beauty than us. We  will design your app using C++,&nbsp;C#, Visual Basic&nbsp;and other technical languages that are friendly to the latest  Windows 8 giving the end-user, a truly memorable user interface.</p>
                   </div>
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/WINDOWS.png"></div>
                </div>
                <div class="ContentBlock" style="height:255px;">
                	<div class="ContentText" style="right:10px;">
                        <h1>What&rsquo;s in it for you?</h1>
                        <p align="left">>Microsoft promises, you will receive  80% revenue sharing when the app reaches $25,000 mark, considerably more than  what Apple and Google offer. So having an app developed in the Windows Store is  very profitable from a businessman&rsquo;s perspective. But that is only so if the  application even reaches the $25,000 mark. For that you need a successful Windows  Phone Application Development Company like us who can not only develop an  exquisite app but also promote it to bring major success.</p>
                    </div>
                    <div class="ContentImage" style="left:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/Win1.png"></div>
                </div>
                <div class="ContentBlock" style="height:350px;">
                	<div class="ContentText">
                	  <h1 align="center">&nbsp;</h1>
                        <h1 align="center">The Store:</h1>
                        <p align="left">The Windows Store is currently the  fastest growing application distributor market, seeing as how it reached the  160,000 mark in a shorter time span than Google and even Apple. This should be  proof enough that this Store is in the process of evolving, and as such is  readying itself to provide to an ever-growing market. Have our developers make  for you an app that can dominate the Windows Store before all others. <br>
                  Right now you have the &lsquo;first-mover  advantage&rsquo;, but this window closes faster than you think. Hurry and have an app  developed by us that is sure to bring success. </p>
                    </div>
         
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/Win4.png"></div>
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
