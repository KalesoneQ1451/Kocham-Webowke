<?php

$dir = 'data';

if(isset($_POST))
{
	$file = $_POST['jsonFile'];
	$json = file_get_contents($dir . DIRECTORY_SEPARATOR . $file . '.json');

	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		$status = $_POST['status'];
		$name = $_POST['name'];
		$obj = json_decode($json);
		$obj->placement->{$id}->switchStatus = $status;
		
		
		file_put_contents($dir . DIRECTORY_SEPARATOR . $file . '.json', json_encode($obj));
		$json = file_get_contents($dir . DIRECTORY_SEPARATOR . $file . '.json');
	}
	echo $json;
}