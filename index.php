<?php 
	include('sdk_aws_s3.php');

	$s3_sdk = new Sdk_aws_s3();
	
	//echo $s3_sdk->uploadFile('test.txt', 'files/test.txt','bucket-name');
	//var_dump($s3_sdk->getBucketList());
	
	echo '<pre>';
		var_dump($s3_sdk->createBucket('testbucket0005'));
	echo '</pre>';
 ?>