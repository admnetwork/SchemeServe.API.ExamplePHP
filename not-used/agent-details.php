<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $page->Title; ?></title>
		<link href="style/default.css" rel="stylesheet" type="text/css" />
	<head>
	<body> 
		<div id="outerContainer">
			<div id="innerContainer">
				<?php require_once("ui/header.php"); ?>

				<span class="DEBUG">This whole page would not appear for Direct schemes BUT if the Agent Code is set in the Querystring we should still record it.</span>
				
				<div id="mainContent">
					<h1>Get a quick quote</h1>
					<h2>My Test Insurance Scheme</h2>
					<div class="edgy">
						<label for="name" class="big">Agent Code</label>
						<input name="agent-code"/>
						<p class="field_desc">Please enter your agent code or <a href="#signin">click here to sign in</a> if you are completing this form on behalf of the insured.</p>
						<p class="field_desc">Alternatively you can <a href="agent-register.php">register a new agent account</a>.</p>
					</div>					
					<div class="edgy">
						<label for="name" class="big">Search for existing client <span class="opt">(optional)</span></label>
						<p><a href="#signin-agent">Click here to sign in to your agent user account.</a></p>							
						<p class="field_desc">If you are completing this form on behalf of an existing client you can search for their account but you will need to sign in first. Important: For new clients just click Next, you'll enter their details later.</p>
					</div>					
					<input type="submit" class="rounded" value="Back" onclick="window.location='choose.php'"/>
					<input type="submit" class="rounded right" value="Next"/>
					
					<input type="submit" class="rounded-DEBUG right" value="ALL OK or SKIPPED (direct scheme)" onclick="window.location='quote-quick-questions.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="NOT AUTHORISED" onclick="window.location='agent-noauth.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>