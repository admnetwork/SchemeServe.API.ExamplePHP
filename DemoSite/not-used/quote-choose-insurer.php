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
						<li>Policy details will be viewed in an overlay so the user does not need to leave this page.</li>
					</ul>
				</span>
				<div id="mainContent">					
					<h1>Get a quick quote</h1>
					<h2>My Test Insurance Scheme</h2>
					<div class="edgy">
						<h3>Choose the package that is right for you.</h3>
						
						<!-- FIXME: the line below is just a mockup and will be removed soon -->
						<br/><center><a href="quote-quick-created.php"><img src="aggmock.png"/></a></center>
					</div>
					<input type="submit" class="rounded" value="Back" onclick="window.location='quote-quick-questions.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>