<?php

namespace IPInfoDB;

/**
 * IPInfoDB API service.
 */
class Api
{
	/**
	 * IPInfoDB API key.
	 *
	 * @var string
	 */
	protected $apiKey;

	/**
	 * Constructor.
	 *
	 * @param string $apiKey a IPInfoDB API key
	 *
	 * @throws \Exception
	 */
	public function __construct($apiKey)
	{
		if (!preg_match('/^[0-9a-z]{64}$/', $apiKey)) {
			throw new \Exception(__CLASS__ . ': Invalid IPInfoDB API key.');
		}

		$this->apiKey = $apiKey;
	}

	/**
	 * Get country information by IP address.
	 *
	 * @param string $ip
	 *
	 * @return array|false
	 */
	public function getCountry($ip)
	{
		$response = $this->get('http://api.ipinfodb.com/v3/ip-country?' . http_build_query([
			'key'    => $this->apiKey,
			'format' => 'json',
			'ip'     => $ip,
		]));

		if (($json = json_decode($response, true)) === null) {
			return false;
		}

		return $json;
	}

	/**
	 * Get city information by IP address.
	 *
	 * @param string $ip
	 *
	 * @return array|false
	 */
	public function getCity($ip)
	{
		$response = $this->get('http://api.ipinfodb.com/v3/ip-city?' . http_build_query([
			'key'    => $this->apiKey,
			'format' => 'json',
			'ip'     => $ip,
		]));

		if (($json = json_decode($response, true)) === null) {
			return false;
		}

		return $json;
	}

	/**
	 * Call a remote URL using cUrl GET request.
	 *
	 * @param string $url
	 *
	 * @return string|null
	 */
	private function get($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);

		$response = curl_exec($ch);

		if (!curl_errno($ch)) {
			curl_close($ch);

			return $response;
		}

		curl_close($ch);
	}
}
