<?php 
	include('sdk_aws_s3.php');
	$conf = include('config.php');

	$s3_sdk = new Sdk_aws_s3(
		$conf['id_key'],
		$conf['secret_access_key'],
		$conf['bucket_name'],
		$conf['region']
	);

	$response = $s3_sdk->uploadFile('test.txt', 'files/test.txt');
	echo $response;
 ?>