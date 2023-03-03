<?php require_once("../includes/config.inc.php"); ?>
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
<meta name="Keywords" content="mobile apps, web application, appstrophic, appstrophic dubai, appstrophic developer, appstrophic designer, mobile apps developer, web apps developer, appstrophic process, our process">
<meta name="Description" content="Make your android, iOS, web applications with Appstrophic developers &amp; designers who follow shortest path to complete task before deadlines.">
<title>Develop Mobile & Web applications Fast with Appstrophic UAE</title>
<!--<link href="css/boilerplate.css" rel="stylesheet" type="text/css">-->
<link href="../css/StyleSheet.css" rel="stylesheet" type="text/css">
<link href="../css/liquid-slider.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/jquery.selectbox.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../js/respond.min.js"></script>
</head>
<body>
<div class="Cloud"></div>
<div class="CustomQuoteScroller">
<?php include("../includes/HelpForm.php"); ?>
<a href="javascript:;" class="btn openBtn"></a>
</div><!-- //.CustomQuoteScroller -->
<div class="gridContainer clearfix">
  <div id="InnerWrapper">
  	<div id="TopBar">
    	<header>
        	<div id="Logo"><a href="<?php echo BASE_URL; ?>"></a></div>
            <?php include("../includes/TopNav.php"); ?><!-- //TopNav -->
        </header><!-- //header -->
    </div><!-- //TopBar -->
    <div class="MainBanner">
    	 <center> <img src="../../../../../images/banners/our process.jpg"></div></center>
    </div><!-- //SlideShowContainer -->
     <section>
    	<div class="FixedWrapper">
        	<div style="float:left; height:20px; border-bottom:1px solid #666; width:100%;"></div>
            <section id="Body">
            	<div class="ContentBlock" style="height:135px;">
                    <h1>Our Process</h1>
                     
        <p align="left">Our dedicated team of hardworking software engineers focuses  on the qualitative procedures to implement the required task.Engineers of Appstrophic  follow the easy development strategy, defined  as under
              </div>
                <div class="ContentBlock" style="height:200px;">
                	<div class="ContentText">
                    	<h3>Phase 1</h3>
                		<p align="left">The very 1st Phase of the work is Analysis – <em>The most important phase out of whole</em>.  Our humble team of business development converses with customers &amp; design the  System Requirement Specifications (SRS) document. The document contains designs  &amp; mockups – The basic pillars of the new project. Our team assures the  completion of work within the required time &amp; by mutual understandings with  our clients the agreement is signed. <br></p>
                    </div>
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/analysis.png"></div>
                </div>
                <div class="ContentBlock" style="height:240px;">
                	<div class="ContentText" style="right:10px;">
                        <h3>Phase 2 </h3>
                        <p align="left"> After Analysis comes Design &amp; Coding. Appearance plays vital  role, according to the famous proverb &ldquo;<em>First  Impression is the Last Impression</em>&rdquo;. We evaluate your requirements &amp;  confer with team members.We then jot down important points, breakup work into  parts &amp; set deadlines to each of the parts making the work easy going. Our  designers are energetic &amp; their minds are stacked with new &amp; advanced ideas  on almost every field. We assure you; you will certainly get amazed by the works  of our innovative designers &amp; dedicated programmers.<br></p>
                    </div>
                    <div class="ContentImage" style="left:10px;"><img src="<?php echo BASE_URL; ?>/images/content_images/design proces.png"></div>
                </div>
                  <div class="ContentBlock" style="height:150px;">
                	<div class="ContentText">
                    	<h3>Phase 3</h3>
                		<p align="left"> Enactment of the project. This phase is also one  of the most important phases in the process. In this phase our work undergoes into  the User Approval Testing (UAT), in short the project is presented before the  client. <br></p>
                    </div>
                    <div class="ContentImage" style="right:15px;"><img src="<?php echo BASE_URL; ?>/images/content_images/enactment.png"></div>
                </div>
                        <div class="ContentBlock" style="height:180px;">
                	<div class="ContentText" style="right:10px;">
                        <h2>Phase 4</h2>
                        <p align="left">Last but not least comes the testing of the Project. For  this, the client is provided with testing login credentials. This lets the customer  check his project online &amp; give feedbacks about it. If any fault persists our  team is always ready to solve it to gain customer&rsquo;s satisfaction.</p>
                    </div>
                    <div class="ContentImage" style="left:10px;"><img src="<?php echo BASE_URL; ?>/images/content_images/testing.png"></div>
                </div>
                <div class="LiveChatArea">
                	<div class="ImgHolder"><a href="#"><img src="../../../../../images/livechat.png" alt="Live Chat"></a></div>
                </div><!-- //.LiveChatArea -->
            </section>
<?php include("../includes/Sidebar.php"); ?><!-- //Sidebar -->
        </div><!-- //.FixedWrapper -->
    </section><!-- //Fixed -->
    <?php include("../includes/footer.php"); ?><!-- //footer -->
  </div><!-- //InnerWrapper -->
</div><!-- //gridContainer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/jquery.selectbox-0.2.min.js"></script>
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
		$.post("../js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post("../js/phps/submitHelpForm.php", {nameVal: name, emailVal: email, questionVal: question}, function(response){
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
		$.post("../js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post("../js/phps/submitQuoteForm.php", {nameVal: name, emailVal: email, companyVal: company, phoneVal: phone, descVal: desc}, function(response){
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
