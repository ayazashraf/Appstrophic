<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#contact-form").submit(function(){
		$.post("mail.php", {name:$("#name").val(), email:$("#email").val(), message:$("#message").val()}, function(data){
			if(data == "sent")
			{
				$("#sent").fadeIn("slow", function(){
					$(this).delay(4000).fadeOut("slow");
					})
			}
			else
			{
				$("#notsent").fadeIn("slow", function(){
					$(this).delay(4000).fadeOut("slow");
					})
			}
			})
			return false;
		});
	});
</script>
<div class="HelpForm">
	<h2 class="HelpFormTitle">How we may help you?</h2>
<form action="mail.php" method="post" id="contact-form" class="form">
    <table>
    	<tr>
        	<td></td>
            <td><input type="text" id="name" name="name" size="40" placeholder="Full Name"></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="email" id="email" name="email" size="40" placeholder="Your Email"></td>
        </tr>
        <tr>
            <td></td>
            <td><textarea name="question" id="question" cols="31" rows="5" placeholder="Type your question..."></textarea></td>
        </tr>
        <tr>
        	<td></td>
            <td><img src="<?php echo BASE_URL; ?>/includes/CaptchaSecurityImages.php?width=265&height=75&characters=6#" alt="captcha"></td>
        </tr>
        <tr>
        	<td></td>
            <td><small><label>Enter the code above:</label></small></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="text" name="code" id="code" size="18" maxlength="6"><input type="submit" class="SubmitButton"></td>
        </tr>
        
    </table>
   </form>
</div>