<aside class="GridColumn Right" id="Sidebar">
            	<div class="GridBlock">
                	<div class="QuoteForm">
                    	<div class="QuoteFormTitle">Request a Custom Quote</div>
                        <div class="QuoteFormArea">
                        	<form action="Quotemail.php" method="post" id="contact-form" class="form">
                            	<input type="text" name="q_name" id="q_name" size="35" class="icn-user" style="padding-left:40px;" placeholder="Full Name">
                                <input type="text" name="q_email" id="q_email" size="35" class="icn-email" style="padding-left:40px;" placeholder="Email Address">
                                <input type="text" name="q_company" id="q_company" size="35" class="icn-company" style="padding-left:40px;" placeholder="Company Name">
                                <input type="text" name="q_phone" id="q_phone" size="35" class="icn-phone" style="padding-left:40px;" placeholder="Phone">
                                <label>Briefly describe your Project</label>
                                <textarea name="q_desc" id="q_desc" cols="31" rows="5"></textarea>
                                <img src="<?php echo BASE_URL; ?>/includes/CaptchaSecurityImages.php?width=265&height=75&characters=6#" alt="captcha">
                                <label>Enter the Code above</label><div class="ClearFix"></div>
                                <input type="text" name="q_code" id="q_code" size="20">
                                <input type="submit" class="SubmitButton" >
                            </form>
                        </div>
                    </div>
                </div>
            </aside>