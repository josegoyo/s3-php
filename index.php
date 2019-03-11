<?php 
	include('sdk_aws_s3.php');

	$s3_sdk = new Sdk_aws_s3();
	
	echo $s3_sdk->uploadFile('test.txt', 'files/test.txt');
 ?>