[![Latest Stable Version](https://img.shields.io/packagist/v/ip2location/ipinfodb-php.svg)](https://packagist.org/packages/ip2location/ipinfodb-php)
[![Total Downloads](https://img.shields.io/packagist/dt/ip2location/ipinfodb-php.svg?style=flat-square)](https://packagist.org/packages/ip2location/ipinfodb-php)  

IPInfoDB PHP
==============

This IPInfoDB PHP class provides a fast lookup of country, region, city, latitude, longitude, ZIP code  and time zone as values. The IPInfoDB web service is designed for server-to-server call.

This library can be used in many types of projects such as:

 - Locate where is your website visitors come from
 - Analyze your web server logs to determine the countries of your visitors
 - Country blocker
 - Page redirection according to country
 - Geotargeting in advertisement

IPInfoDB free API uses the geolocation data from [IP2Location LITE database](https://lite.ip2location.com).  IP2Location Commercial version provides higher accuracy is available at https://www.ip2location.com/web-service with no rate limit.

## Methods
Below are the methods supported in this class.

|Method Name|Description|
|---|---|
|getCountry|Return country code and country name information of the IP address.|
|getCity|Return city information of the IP address, such as region, city, latitude, longitude, ZIP Code and time zone.|


## FAQ



#### How to I get the API key?

Please register your API key at https://ipinfodb.com/register.



#### Is there any restriction for using this web service?

There is a rate limit of 2 queries per second.



Copyright
=========

Copyright (C) 2021 by IPInfoDB.com, support@ipinfodb.com
