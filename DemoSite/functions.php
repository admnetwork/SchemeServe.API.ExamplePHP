<?php

$USERNAME = "ApiDemoAccess";
$PASSWORD = "4Dp42lsk83";
$SECURITY_TOKEN = "";

// populates the request-body-example.xml file with the passed form values
function parse_answers() {

    // get POST data
    $clientTitle = $_POST["client_title"];
    $clientFirstName = $_POST["client_firstname"];
    $clientSurname = $_POST["client_surname"];

    $clientAddressLine1 = $_POST["client_address_line1"];
    $clientAddressLine2 = $_POST["client_address_line2"];
    $clientAddressTown = $_POST["client_address_town"];
    $clientAddressCounty = $_POST["client_address_county"];

    $clientEmail = $_POST["client_email"];
    $tripStartDate = $_POST["trip_from_date"];
    $tripEndDate = $_POST["trip_to_date"];
    $tripDestination = $_POST["destination_field"];
    $tripPartnerTravelling = $_POST["partner_travelling_field"];

    // load demo XML document

    $dom = new DOMDocument();
    $dom->formatOutput = true;
    $dom->load("data/request-body.xml");

    // personal information & address data

    $dom->getElementsByTagName("firstname")->item(0)->nodeValue = $clientFirstName;
    $dom->getElementsByTagName("surname")->item(0)->nodeValue = $clientSurname;
    $dom->getElementsByTagName("title")->item(0)->nodeValue = $clientTitle;

    $dom->getElementsByTagName("addressline1")->item(0)->nodeValue = $clientAddressLine1;
    $dom->getElementsByTagName("addressline2")->item(0)->nodeValue = $clientAddressLine2;
    $dom->getElementsByTagName("town")->item(0)->nodeValue = $clientAddressTown;
    $dom->getElementsByTagName("county")->item(0)->nodeValue = $clientAddressCounty;

    // general questions

    $questions = $dom->getElementsByTagName('question');

    foreach ($questions as $question) {
        $questionid = $question->getElementsByTagName('questionid')->item(0)->nodeValue;
        $answer = $question->getElementsByTagName('value')->item(0);

        switch ($questionid) {
            case "ClientEmailField":
                $answer->nodeValue = $clientEmail;

                break;
            case "StartDateField":
                $answer->nodeValue = $tripStartDate;

                break;
            case "EndDateField":
                $answer->nodeValue = $tripEndDate;

                break;
            case "DestinationField":
                $answer->nodeValue = $tripDestination;

                break;
            case "PartnerTravellingField":
                $answer->nodeValue = $tripPartnerTravelling;

                break;
        }
    }

    $dom->save('data/request-body.xml');
}

function get_authentication_token() {
    global $USERNAME;
    global $PASSWORD;
    global $SECURITY_TOKEN;
    
    $url = 'https://slipstream.schemeserve.com/api/token/' . $USERNAME . '/' . $PASSWORD;
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 100);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // remove this from production

    $output = curl_exec($ch);

    if (!$output) {
        trigger_error('Curl error: ' . curl_error($ch), E_USER_ERROR);
    }
    
    $SECURITY_TOKEN = get_strings_between($output, "<token>", "</token>");
}

// reads the request-body-example.xml file and sends it to the server
function submit_quote() {
    global $SECURITY_TOKEN;
    
    $url = 'https://slipstream.schemeserve.com/api/cases?token=' . $SECURITY_TOKEN;

    $case = file_get_contents('data/request-body.xml', true);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 100);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json') );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/xml'));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // remove this from production

    curl_setopt($ch, CURLOPT_POSTFIELDS, $case);

    $output = curl_exec($ch);

    if (!$output) {
        echo 'Curl error: ' . curl_error($ch);
        return false;
    }
}


// HELPERS

function get_strings_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    
    if ($ini == 0) {
        return "";
    }
    
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    
    return substr($string,$ini,$len);
}