<?php
$url = 'https://{account}.schemeserve.com/api/cases?token={token}';

$case = file_get_contents('./request-body-example-xml', true);

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_HEADER, 0 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); 
curl_setopt( $ch, CURLOPT_TIMEOUT, 100 );
curl_setopt( $ch, CURLINFO_HEADER_OUT, true );
//curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json') );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: text/xml') );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt( $ch, CURLOPT_POSTFIELDS, $case );

$output = curl_exec($ch);

if(!$output) {
        echo 'Curl error: ' . curl_error($ch);
	return false;
}

echo $output;
?>