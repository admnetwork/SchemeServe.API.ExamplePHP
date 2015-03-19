
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $page->Title; ?></title>
        <link href="style/default.css" rel="stylesheet" type="text/css" />
        <link href="style/datepicker.min.css" rel="stylesheet" type="text/css" />
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js"></script>
        <script src="javascript/bootstrap-datepicker.min.js"></script>
        <script src="javascript/demo.js"></script>
    </head>
    <body>
        <div id="outerContainer">
            <div id="innerContainer">
                <?php require_once("ui/header.php"); ?>

                <div id="mainContent">
                    <h1>Get a Quote (example)</h1>
                    <h2>API Demo Scheme (direct)</h2>

                    <form id="submitQuoteForm" action="quote-submitted.php" method="post">
                        <div class="edgy">
                            <label for="name">Client name</label>
                            <select id="client-title" name="client_title" tabindex="1">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                                <option value="Dr">Dr</option>
                                <option value="Prof">Prof</option>
                                <option value="Rev">Rev</option>
                                <option value="Capt">Capt</option>
                            </select>
                            <input class="smaller client-name" name="client_firstname" />
                            <input class="smaller client-name" name="client_surname" />
                            <p class="field_desc">Please enter your full name e.g. Mr Cyrill Smythe.</p>
                            <br/>
                        </div>

                        <div class="edgy">
                            <label for="name">Client Address</label>
                            <input class="small" name="client_address_line1" placeholder="Line 1" />
                            <input class="small" name="client_address_line2" placeholder="Line 2" />
                            <input class="small" name="client_address_town" placeholder="Town/City" />
                            <input class="small" name="client_address_county" placeholder="County" />
                            <p class="field_desc">Please enter full address details. </p>
                        </div>

                        <div class="edgy">
                            <label for="name">Client E-mail</label>
                            <input name="client_email" class="small align-left client-email"/>
                            <p class="field_desc">Please enter a valid email. </p>
                        </div>

                        <div class="input-daterange edgy">
                            <label for="name" class="date">Start/End dates of trip</label>
                            <input type="text" name="trip_from_date" class="smaller align-left date" value="2012-04-05" />
                            <span class="add-on date-to">to</span>
                            <input type="text" name="trip_to_date" class="smaller align-left date" value="2012-04-19" />
                            <p class="field_desc">Please enter valid dates. </p>
                        </div>

                        <div class="edgy">
                            <label for="name">Destination</label>
                            <select name="destination_field" id="DestinationField">
                                <option selected="selected" value="UK">UK</option>
                                <option value="Europe">Europe</option>
                                <option value="Worldwide">Worldwide</option>
                            </select>
                        </div>

                        <div class="edgy">
                            <label for="name">Partner Travelling</label>
                            <select name="partner_travelling_field" id="PartnerTravellingField">
                                <option value="Yes">Yes</option>
                                <option selected="selected" value="No">No</option>
                            </select>
                        </div>

                        <input type="button" class="rounded" value="Back" onclick="window.location = 'index.php'"/>

                        <input type="submit" id="submitQuote" class="rounded-DEBUG right" value="Submit Quote"/>
                    </form>

                </div>

                <?php require_once("ui/footer.php"); ?>
            </div>
        </div>
    </body>
</html>