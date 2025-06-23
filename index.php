<?php

http_response_code(200);

$array = array('test' => 'test',
               'abc'  => 'test2');
		   
$json = json_encode($array);

echo $json;