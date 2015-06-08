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
					<h1>WELCOME!</h1>
					<p>This website is an example of what can be done with the SchemeServe API. Feel free to edit the code: stretch, pull, add, twist and cut-out anything you like, the code is yours!</p>
					<p><strong>If you need help with anything, get in touch with admNetwork, the developers of SchemeServe here:</strong> <a target="admSupport" href="http://support.admnetwork.com">http://support.admnetwork.com</a></p>
					<p>To get started, try creating a new insurance quote by clicking the button below...</p><br/>
					<input type="submit" class="rounded" value="Get a Quote" onclick="window.location='submit-quote.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>