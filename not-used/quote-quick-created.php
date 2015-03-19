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
						<li>At this point the quotation should have been AUTOMATICALLY saved.</li>
						<li>If they click 'Save for later', take them to the next page BUT do not ask Inception Date.</li>
						<li>The text section must always appear. If there is no text available in the special system document 'Quotation Summary', use the copy provided here.</li>
					</ul>
				</span>
				<div id="mainContent">					
					<h1>Your quick quotation</h1>
					<h2>My Test Insurance Scheme</h2>
					<div class="edgy">
						<h3>If you choose to proceed your insurance premium will be approximately SYM-PREMIUM.</h3>
						<p class="big">Please view and print the following important documents relating to your quotation, which have also been emailed to EMAILADDRESS.</p>
						<p class="big">If you have any questions please <a href="#contact">contact us</a>.</p>
						<h3>IMPORTANT: Your insurance cover will not start until after you click Next.</h3>
						<div class="splitter_dots"></div>
					</div>
					<input type="submit" class="rounded" value="Save for later"/>
					<input type="submit" class="rounded right" value="Next"/>
					
					<input type="submit" class="rounded-DEBUG right" value="Get CLIENT/INCEPT" onclick="window.location='client-and-inception.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="CLIENT/INCEPT OK, do full quote" onclick="window.location='quote-full-questions.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="CLIENT/INCEPT OK, skip full quote" onclick="window.location='policy-oncover.php'"/>
					
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>