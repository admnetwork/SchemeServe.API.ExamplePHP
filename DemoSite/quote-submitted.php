<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 


require_once 'functions.php'; 

parse_answers();
get_authentication_token();
submit_quote();

?>

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
					<h1>Quote Submitted</h1>
					<h2>API Demo Scheme</h2>
					<div class="edgy">
						<h3>You've just submitted a quote through the API !</h3>
                                                <p class="big">You can find the request XML generated with your answers <a href="data/request-body.xml">here</a>. 
						If you have any questions please <a href="http://www.insurancesoftware.com/theService/contact-us/">contact us</a>
                                                    or check the <a href="http://www.insurancesoftware.com/developers/">API docs</a>.</p>
						<div class="splitter_dots"></div>
					</div>
					<input type="button" class="rounded" value="Try again" onclick="window.location='submit-quote.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>