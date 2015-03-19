<?php

function prepareSubmitQuoteXML() {
    
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
    $dom->load("data/request-body-example.xml");

    // personal information & address data
    
    $dom->getElementsByTagName("firstname")->item(0)->nodeValue = $clientFirstName;
    $dom->getElementsByTagName("surname")->item(0)->nodeValue = $clientSurname;
    $dom->getElementsByTagName("title")->item(0)->nodeValue = $clientTitle;

    $dom->getElementsByTagName("addressline1")->item(0)->nodeValue = $clientAddressLine1;
    $dom->getElementsByTagName("addressline2")->item(0)->nodeValue = $clientAddressLine2;
    $dom->getElementsByTagName("town")->item(0)->nodeValue = $clientAddressTown;
    $dom->getElementsByTagName("county")->item(0)->nodeValue = $clientAddressCounty;

    // general questions
    
    $questions = $dom->getElementsByTagName('value');

    foreach ($questions as $question) {
        $questionid = $question->getElementsByTagName('questionid')->nodeValue;
        $answer = $question->getElementsByTagName('value');

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

    $dom->saveXML();
}
