<?php require_once("../../includes/config.inc.php"); ?>
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
<meta name="Keywords" content="web development, web design services, web developers, customized website, appstrophic, appstrophic dubai">
<meta name="Description" content="Expand your business worldwide by making your own customized website. Web developers &amp; designers at Appstrophic have the finest skills on latest Web techniques.">
<title>Modified Web design Services & Development | Appstrophic UAE</title>
<!--<link href="css/boilerplate.css" rel="stylesheet" type="text/css">-->
<link href="../../css/StyleSheet.css" rel="stylesheet" type="text/css">
<link href="../../css/liquid-slider.css" rel="stylesheet" media="screen" type="text/css">
<link href="../../css/jquery.selectbox.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../../js/respond.min.js"></script>
</head>
<body>
<div class="Cloud"></div>
<div class="CustomQuoteScroller">
<?php include("../../includes/HelpForm.php"); ?>
<a href="javascript:;" class="btn openBtn"></a>
</div><!-- //.CustomQuoteScroller -->
<div class="gridContainer clearfix">
  <div id="InnerWrapper">
  	<div id="TopBar">
    	<header>
        	<div id="Logo"><a href="<?php echo BASE_URL; ?>"></a></div>
            <?php include("../../includes/TopNav.php"); ?><!-- //TopNav -->
        </header><!-- //header -->
    </div><!-- //TopBar -->
    <div class="MainBanner">
    	 <center> <img src="../../../../../images/banners/website development.jpg"></div></center>
    </div><!-- //SlideShowContainer -->
    <section>
    	<div class="FixedWrapper">
        	<div style="float:left; height:20px; border-bottom:1px solid #666; width:100%;"></div>
          
               <section id="Body">
                 <div class="ContentBlock" style="height:160px;">
                   <h1 style="font-size:36px"><strong>
                     <div class="colour">Website Design &amp; Development</div>
                   </strong></h1>
                   <p align="left">Web design and development is a hard task.  It involves a lot of testing, planning and understanding of complex softwares  to make it. Fortunately, being a web development company, we provide the best  custom  web design services in Dubai. <br></p>
                 </div>
                 <div class="ContentBlock" style="height:205px;">
               	  <div class="ContentText">
                    	<h1>Designing </h1>
                		<p align="left">The first step in making a web, designing lays  the foundation in making a good website. Being primarily a UAE-based web design  company, we cater to international clients and employ professional standards in  all our works. We therefore provide the best web design in Dubai and, by  extension, the whole region as we offer custom web development.<br></p>
                   </div>
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/web1.png"></div>
                </div>
                <div class="ContentBlock" style="height:190px;">
                	<div class="ContentText" style="right:10px;">
                        <h1>Development</h1>
                        <p align="left"> With the design done, our team of Dubai web  designers along with our strategists and S.E.O. experts join their heads in the  development of your website. Our aim is make the site go viral, for that we  make an original layout, an easy-to-use interface, clear and simple site  navigation, and be as attractive as possible in looks.<br></p>
                    </div>
                    <div class="ContentImage" style="left:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/Web 3.png"></div>
                </div>
                <div class="ContentBlock" style="height:175px;">
                	<div class="ContentText">
                
                        <h1 align="center">Deployment</h1>
                        <p align="left">With the website ready, our team of experts run  it through a series of tests to ensure its genuine quality. Here we also draft  an original logo design which is shown to the client with the website. If  approved, the logo is added to the website and the site goes live.</p>
                    </div>
         
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/web devlp.png"></div>
                </div>
                <div class="LiveChatArea">
                	<div class="ImgHolder"><a href="#"><img src="../../../../../images/livechat.png" alt="Live Chat"></a></div>
                </div><!-- //.LiveChatArea -->
            </section>
            <?php include("../../includes/Sidebar.php"); ?><!-- //Sidebar -->
        </div><!-- //.FixedWrapper -->
    </section><!-- //Fixed -->
    <?php include("../../includes/footer.php"); ?><!-- //footer -->
  </div><!-- //InnerWrapper -->
</div><!-- //gridContainer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../../js/jquery.selectbox-0.2.min.js"></script>
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
		$.post("../../js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post("../../js/phps/submitHelpForm.php", {nameVal: name, emailVal: email, questionVal: question}, function(response){
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
