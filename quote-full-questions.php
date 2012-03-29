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
						<li>This is the full quotation questions page and you would expect to see a lot more questions here than during a quick quote.</li>
						<li>This page must not appear at all if the scheme has no 'full quotation' questions defined.</li>
						<li>Must be able to duplicate questions in the post quote section which would be prefilled if the SystemId matches questions already answered during Quick Quote.</li>
						<li>During our new MTA and Renewal processes (which we will develop later) this part of the Get Quote process onwards will be used.</li>
						<li>Only now, after these post quote questions are completed, are all the rules run, referrals processed etc. The matrix is also re-run after this page.</li>
					</ul>
				</span>
				
				<div id="mainContent">
					<h1>Complete your quotation</h1>
					<h2>My Test Insurance Scheme</h2>
					<div class="edgy">
						<label for="name">What is your name?</label>
						<input name="name"/>
						<p class="field_desc">Please enter your full name e.g. Mr Cyrill Smythe.</p>
					</div>
					<div class="edgy">
						<label for="name">What is your quest?</label>
						<input name="name"/>
						<p class="field_desc">Please enter full details.</p>
					</div>
					<div class="edgy edgy_error">
						<label for="name" class="error">What is your favourite colour?</label>
						<input name="name" class="error"/>
						<p class="field_desc error">This field is required.</p>
						<p class="field_desc error">Please enter your favourite colour e.g. Blue.</p>
					</div>
					<input type="submit" class="rounded" value="Back" onclick="window.location='client-and-inception.php'"/>
					<input type="submit" class="rounded right" value="Next" onclick="window.location='policy-oncover.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>