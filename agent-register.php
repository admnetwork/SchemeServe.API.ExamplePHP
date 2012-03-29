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
					<a class="red right" value="Back" onclick="window.location='agent-details.php'">Cancel and go back</a>
					<h1>Register new account</h1>					
					<div class="edgy">
						<table class="columns">
							<tr>
								<td class="leftColumn">
									<label for="orgname">Name of your organisation</label>
									<input name="orgname"/>
						
									<h4 class="gaptop30">Your personal details</h4>
									<label for="personal_email" class="sub">Your email address</label><input name="personal_email" class="nocaps"/>
									<label for="personal_password" class="sub">Password</label><input name="personal_password" class="password"/>
									<label for="personal_name" class="sub">Your name</label><input name="personal_name"/>
									<label for="personal_position" class="sub">Your position</label><input name="personal_position"/>
									
									<h4 class="gaptop30">Web <span class="opt">(optional)</span></h4>
									<label for="web_website" class="sub">Website</label><input name="web_website" class="nocaps"/>
									<label for="web_twitter" class="sub">Twitter</label><input name="web_twitter" class="nocaps"/>
									<label for="web_linkedin" class="sub">LinkedIn</label><input name="web_linkedin" class="nocaps"/>
									<label for="web_skype" class="sub">Skype</label><input name="web_skype" class="nocaps"/>
								</td>
								<td class="spacerColumn">&nbsp;</td>
								<td class="rightColumn">
									<h4>Phone numbers</h4>
									<label for="phone_primary" class="sub">Primary</label><input name="phone_primary" class="number"/>
									<label for="phone_fax" class="sub">Fax</label><input name="phone_fax" class="number"/>
							
									<h4 class="gaptop30">Address</h4>
									<label for="address_line1" class="sub">Line 1</label><input name="address_line1"/>
									<label for="address_line2" class="sub">Line 2</label><input name="address_line2"/>
									<label for="address_towncity" class="sub">Town/City</label><input name="address_towncity"/>
									<label for="address_county" class="sub">County</label><input name="address_county"/>
									<label for="address_postalcode" class="sub">Postcode</label><input name="address_postalcode" class="postcode"/>
									<label for="address_country" class="sub">Country</label><input name="address_country" class="tiny"/>
								</td>
							</tr>
							<tr><td colspan="3"><div class="splitter_dots"></div></td></tr>
							<tr>
								<td class="leftColumn">						
									<h4 class="gaptop30">Organisation type</h4>
									<div><input name="org_regtype" id="org_regtype_1" type="radio" class="radio"/><label for="org_regtype_1" class="sub_radio">Directly regulated</label></div>
									<label for="org_dr_fsano" class="sub indent">FSA Number</label><input name="org_dr_fsano" class="number indent nocaps"/>
									
									<div class="gaptop10"><input name="org_regtype" id="org_regtype_2" type="radio" class="radio"/><label for="org_regtype_2" class="sub_radio">Authorised representative</label></div>
									<label for="org_dr_fsano" class="sub indent">Representative for</label><input name="org_dr_fsano" class="small indent"/>
									<label for="org_dr_fsano" class="sub indent">Your membership no. <span class="opt">(optional)</span></label><input name="org_dr_fsano" class="number indent nocaps"/>
									<label for="org_dr_fsano" class="sub indent">FSA Number of XXXXX</label><input name="org_dr_fsano" class="number indent nocaps"/>
																		
									<div class="gaptop10"><input name="org_regtype" id="org_regtype_3" type="radio" class="radio"/><label for="org_regtype_3" class="sub_radio">Non regulated</label></div>
								</td>
								<td class="spacerColumn">&nbsp;</td>
								<td class="rightColumn">							
									<h4 class="gaptop30">Professional indemnity insurance details</h4>
									<label for="name" class="sub">Insurer</label><input name="address_line1" class="small"/>
									<label for="name" class="sub">Policy number</label><input name="address_line2" class="number"/>
									<label for="name" class="sub">Renewal date</label><input name="address_towncity" class="date"/>
									<label for="name" class="sub">Excess (&pound;)</label><input name="address_county" class="money"/>
									<label for="name" class="sub">Limit of indemnity (&pound;)</label><input name="address_postalcode" class="money"/>
								</td>
							</tr>
						</table>
					</div>
					<input type="submit" class="rounded" value="Back" onclick="window.location='agent-details.php'"/>
					<input type="submit" class="rounded right" value="Next"/>
					
					<input type="submit" class="rounded-DEBUG right" value="REQUEST" onclick="window.location='agent-requested.php'"/>
					<input type="submit" class="rounded-DEBUG right" value="CREATE" onclick="window.location='agent-created.php'"/>
				</div>
				<?php require_once("ui/footer.php"); ?>
			</div>
		</div>
	</body>
</html>