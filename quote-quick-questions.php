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
				
				<span class="DEBUG">Quotes cannot be referred at the quick quote stage and although the matrix is run it is used only for an indication of premium and nothing else: no rules are run and no actions taken.</span>
				
				<div id="mainContent">
					<h1>Get a quick quote</h1>
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
					<input type="submit" class="rounded" value="Back" onclick="window.location='agent-details.php'"/>
					<input type="submit" class="rounded right" value="Next"/>
					
					<input type="submit" class="rounded-DEBUG right" value="CREATED (choose-the-cheapest)" onclick="window.location='quote-quick-created.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="CHOOSE INSURER (where aggregation enabled)" onclick="window.location='quote-choose-insurer.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>