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
<title>Our Portfolio - Appstrophic</title>
<!--<link href="css/boilerplate.css" rel="stylesheet" type="text/css">-->
<link href="../css/StyleSheet.css" rel="stylesheet" type="text/css">
<link href="../css/liquid-slider.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/jquery.selectbox.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
   $(".button1").click(function(){
   $(".divpic1").animate({
	  left:'45px',
	  width:'+600px'
    });
	$(".divpic2").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic3").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic4").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic5").animate({
	  left:'0px',
	  width:'+0px'
    });
  });
    $(".button2").click(function(){
	$(".divpic2").animate({
      left:'45px',
	  width:'+600px'
    });
	$(".divpic1").animate({
	  left:'0px',
	  width:'+0px'
    });
  	$(".divpic3").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic4").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic5").animate({
	  left:'0px',
	  width:'+0px'
    });
	});
	$(".button3").click(function(){
   $(".divpic3").animate({
	  left:'45px',
	  width:'+600px'
    });
	$(".divpic2").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic1").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic4").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic5").animate({
	  left:'0px',
	  width:'+0px'
    });
  });
   $(".button4").click(function(){
   $(".divpic4").animate({
	  left:'45px',
	  width:'+600px'
    });
	$(".divpic2").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic3").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic1").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic5").animate({
	  left:'0px',
	  width:'+0px'
    });
  });
   $(".button5").click(function(){
   $(".divpic5").animate({
	  left:'45px',
	  width:'+600px'
    });
	$(".divpic2").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic3").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic4").animate({
	  left:'0px',
	  width:'+0px'
    });
		$(".divpic1").animate({
	  left:'0px',
	  width:'+0px'
    });
  });
});
</script> 
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
    	 <center> <img src="../../../../appstrophic_grey/images/banners/our portfolio banner.jpg"></div></center>
    </div><!-- //SlideShowContainer -->
    <section>
    	<div class="FixedWrapper">
        	<div style="float:left; height:20px; border-bottom:1px solid #666; width:100%;"></div>
            <section id="Body">
            	<h1>Our Portfolio</h1>
              <div class="wrapper">
<div class="maindiv">
<center>
<div class="divpic1"><img src="file:///C|/wamp/www/appstrophic_grey/images/banners/about us banner.jpg">
</div>
<div class="divpic2"><img src="file:///C|/wamp/www/appstrophic_grey/images/banners/black berry.jpg">
</div>
<div class="divpic3"><img src="file:///C|/wamp/www/appstrophic_grey/images/banners/graphics design.jpg">

</div>
<div class="divpic4"><img src="file:///C|/wamp/www/appstrophic_grey/images/banners/hire developers.jpg">
</div>
<div class="divpic5"><img src="file:///C|/wamp/www/appstrophic_grey/images/banners/windows.jpg">
</div>
</center></div><center>
<div class="buttonsdiv">
<div class="button1"><button>1</button></div>
<div class="button2"><button>2</button></div>
<div class="button3"><button>3</button></div>
<div class="button4"><button>4</button></div>
<div class="button5"><button>5</button></div>


</div></center>
</div>
              
                <div class="LiveChatArea">
                	<div class="ImgHolder"><a href="#"><img src="../images/livechat.png" alt="Live Chat"></a></div>
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
