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
						<li>When policies are referred, send an email with the case details, referral reason, and referral authority level to an email address specified in the Admin > Website > Domains &amp; Email section.</li>
						<li>The text section must always appear. If there is no text available in the special system document "Quotation Referral Summary", use the copy provided below.</li>
					</ul>
				</span>
				<div id="mainContent">					
					<h1>Your quote has been referred</h1>
					<h2>My Test Insurance Scheme</h2>
					<div class="edgy">
						<h3>You quotation has been referred to one of our underwriters and will be processed shortly.</h3>
						<p class="big">The reason given for the referral was: Flood area.</p>
						<p class="big">In the meantime please view and print the following important documents relating to your quotation, which have also been emailed to EMAILADDRESS.</p>
						<p class="big">If you have any questions please <a href="#contact">contact us</a>.</p>
						<h3>IMPORTANT: Your referral reference is CASE_ID.</h3>
						<div class="splitter_dots"></div>
					</div>
					<input type="submit" class="rounded right" value="View your account"/>
					
					<input type="submit" class="rounded-DEBUG right" value="REFER" onclick="window.location='quote-referred.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="REQUEST SUCCESSFUL (i.e. auto-on-cover not set)" onclick="window.location='quote-full-requested.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="GO BACK NOW" onclick="window.location='client-and-inception.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>