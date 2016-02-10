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
				<span class="DEBUG">New feature: if logged in, this list should be tailored based on Scheme Access determined on agent page.</span>
				<div id="mainContent">					
					<h1>Get a quick quote</h1>
					<h2>Choose a product to continue</h2>
					<ul id="chooseScheme">
						<li>scheme1</li>
						<li>scheme2</li>
						<li>scheme3</li>
					</ul>					
					<input type="submit" class="rounded right" value="Next" onclick="alert('Please choose a product to continue')"/>
					<input type="submit" class="rounded-DEBUG right" value="SKIP" onclick="window.location='agent-details.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>