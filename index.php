<?php 
	include('sdk_aws_s3.php');

	$s3_sdk = new Sdk_aws_s3();
	
	//echo $s3_sdk->uploadFile('test.txt', 'files/test.txt','bucket-name');
	//var_dump($s3_sdk->getBucketList());
	//var_dump($s3_sdk->createBucket('bucket-name'));
	// echo $s3_sdk->getContentFile('your bucket','file name');
	
	echo $s3_sdk->downloadFile('your bucket','file name');
	
 ?>