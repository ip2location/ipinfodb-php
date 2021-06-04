<?php

require 'vendor/autoload.php';

$ipinfodb = new \IPInfoDB\Api('YOUR_API_KEY');

// Get country information only (Faster)
$result = $ipinfodb->getCountry('8.8.8.8');

if ($result) {
	echo "getCountry()\n";
	echo 'Country Code : ' . $result['countryCode'] . "\n";
	echo 'Country Name : ' . $result['countryName'] . "\n\n";
}

// Get city information (Slower)
$result = $ipinfodb->getCity('8.8.8.8');

if ($result) {
	echo "getCity()\n";
	echo 'Country Code : ' . $result['countryCode'] . "\n";
	echo 'Country Name : ' . $result['countryName'] . "\n";
	echo 'Region Name  : ' . $result['regionName'] . "\n";
	echo 'City Name    : ' . $result['cityName'] . "\n";
	echo 'ZIP Code     : ' . $result['zipCode'] . "\n";
	echo 'Latitude     : ' . $result['latitude'] . "\n";
	echo 'Longitude    : ' . $result['longitude'] . "\n";
	echo 'Time Zone    : ' . $result['timeZone'] . "\n\n";
}
