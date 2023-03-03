// Validate Help Form
// validate.HelpForm.js

function submitHelpForm(){
	var base = "http://localhost/appstrophic";
	//var base = "http://demo.foreigntree.com/appstrophic";
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
		$.post(base+"/js/phps/checkCaptcha.php", {codeVal: code}, function(response){
			if(response == "matched"){
				$.post(base+"/js/phps/submitHelpForm.php", {nameVal: name, emailVal: email, questionVal: question}, function(response){
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