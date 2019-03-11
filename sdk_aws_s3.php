<?php
include('config.php');
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

class Sdk_aws_s3 {

	protected $id;
	protected $secret_key;
	protected $bucket_name;
	protected $region_name;

	public function __construct()
	{
		$this->id = Config::$id_key;
		$this->secret_key = Config::$secret_access_key;
		$this->bucket_name = Config::$bucket_name;
		$this->region_name = Config::$region;
	}

	public function uploadFile($file_name,$file_path)
	{
		$s3 = new S3Client([
			'region'  => $this->region_name,
			'version' => 'latest',
			'credentials' => [
			    'key'    => $this->id,
			    'secret' => $this->secret_key,
			]
		]);

		try{
			$result = $s3->putObject([
				'Bucket' => $this->bucket_name,
				'Key'    => $file_name,
				'SourceFile' => $file_path			
			]);
			$response = $result;

		}catch(S3Exception $e){

			$response = $e->getMessage();
		}
		
		return $response;
	}

}

?>