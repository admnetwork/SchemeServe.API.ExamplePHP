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
					<h1>Sorry!</h1>
					<h2>My Test Insurance Scheme</h2>					
					<div class="edgy">
						<h3>Agent <span class="unbold">ABC1</span> is not authorised to create quotations for this product.</label>
						<p class="big">If you have questions or would like to apply for access please <a href="#contact">contact us</a>.</p>
					</div>
					<input type="submit" class="rounded" value="Back" onclick="window.location='agent-details.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>