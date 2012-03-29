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
				<div id="mainContent">
					<h1>Thank-you.</h1>
					<div class="edgy">
						<h3>Your details have been passed to our team who will contact you shortly.</label>
						<p class="big">We aim to respond to all account creation requests within 24 hours but if you have questions or would like to discuss your account please <a href="#contact">contact us</a>.</p>
					</div>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>