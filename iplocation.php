<?php

require 'class.IPInfoDB.php';

$ipinfodb = new IPInfoDB('YOUR_API_KEY');

// Get country information only (Faster)
$result = $ipinfodb->getCountry($_SERVER['REMOTE_ADDR']);

echo 'Country Code : ' . $result->countryCode . '<br>';
echo 'Country Name : ' . $result->countryName . '<br>';

// Get city information (Slower)
$result = $ipinfodb->getCity($_SERVER['REMOTE_ADDR']);

echo 'Country Code : ' . $result->countryCode . '<br>';
echo 'Country Name : ' . $result->countryName . '<br>';
echo 'Region Name  : ' . $result->regionName . '<br>';
echo 'City Name    : ' . $result->cityName . '<br>';
echo 'ZIP Code     : ' . $result->zipCode . '<br>';
echo 'Latitude     : ' . $result->latitude . '<br>';
echo 'Longitude    : ' . $result->longitude . '<br>';
echo 'Time Zone    : ' . $result->timeZone . '<br>';
