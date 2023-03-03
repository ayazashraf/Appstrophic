<div class="HelpForm">
	<h2 class="HelpFormTitle">How we may help you?</h2>
	<table>
    	<tr>
        	<td></td>
            <td><input type="text" name="name" size="40" placeholder="Full Name" required></td>
        </tr>
        <tr>
            <td></td>
            <td><select name="country" id="country"><option value="PK">Pakistan</option><option value="US">United States</option><option value="UK">United Kingdom</option></select></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="email" name="email" size="40" placeholder="Company Email" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="phone" size="40" placeholder="Company Phone"></td>
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
            <td><input type="text" name="code" id="code" size="18" maxlength="6" required><input type="submit" class="SubmitButton" onclick="submitHelpForm(); return false;"></td>
        </tr>
        
    </table>
</div>