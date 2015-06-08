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
				
				<span class="DEBUG">
					<ul>
						<li>This page will not appear if all client details and the inception date have already been collected within the questions.</li>
						<li>However, if either element is still required, the appropriate section and input boxes will be shown below. E.g. if only Client Name is required, only that will be requested below.</li>
						<li>If use clicked 'Save for later' on previous page, they should not be shown Inception Date AND importantly, the Next button should read 'Save' and end the quote process.</li>
					</ul>
				</span>
				
				<div id="mainContent">
					<h1>Get a quick quote</h1>
					<h2>My Test Insurance Scheme</h2>					
					<div class="edgy edgy_error">
						<label for="name" class="error">When would you like your cover to commence?</label>
						<input name="name" class="date error"/>
						<p class="field_desc error">This field is required.</p>
						<p class="field_desc error">Please choose the date you would like the insurance cover to start.</p>
					</div>
					<div class="edgy">
						<label for="name">Client Full Name <span class="opt">or Organisation Name</span></label>
						<input name="name"/>
						<p class="field_desc">Please enter the name of the insured e.g. 'Mr Cyrill Smythe' or 'ACME Company Inc'.</p>
						<p class="field_desc"><a href="#client-login">Existing customers please click here to login.</a></p>
					</div>
					<input type="submit" class="rounded" value="Back" onclick="window.location='quote-quick-created.php'"/>
					<input type="submit" class="rounded right" value="Next"/>
					
					<input type="submit" class="rounded-DEBUG right" value="SKIP FULL QUOTE (no additional questions)" onclick="window.location='policy-oncover.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="DO FULL QUOTE" onclick="window.location='quote-full-questions.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>