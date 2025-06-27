<?php

function getLocalAddress() {
	return $_SERVER['SERVER_ADDR'] ?? null;
}

function getLocalHostName() {
	$server_ip = getLocalAddress()
	if (is_null($server_ip)) {
		$hostname = null;
	} else {
		$hostname  = gethostbyaddr($server_ip);
	}
	return $hostname;
}

$server_ip = getLocalAddress();
$hostname  = getLocalHostName();

$array = array('ipaddress' => $server_ip,
			   'hostname'  => $hostname);

$json = json_encode($array);


http_response_code(200);
header("Content-Type: application/json");
echo $json;