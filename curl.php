<?php 


//https://stackoverflow.com/questions/39313056/issue-getting-airbnb-calendar-using-php-curl
//https://documenter.getpostman.com/view/8695568/SWLh4m7G#8d01e6cb-8dd5-4856-ba1c-fb0b3c1caa9d


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.airbnb.com/v2/threads?client_id=MyApiKey&_limit=10');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Airbnb-OAuth-Token: ' . $MyAccessToken));
curl_setopt($ch, CURLINFO_HEADER_OUT, true);

$response   = curl_exec($ch);
$http       = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$headerout  = curl_getinfo($ch, CURLINFO_HEADER_OUT);
curl_close($ch);

print_r($headerout);

return array($http, $response);
?>
 