<?php
require 'vendor/autoload.php';
class Sdk_aws_s3 {

	protected $id;
	protected $secret_key;
	protected $bucket_name;
	protected $region_name;

	public function __construct($key_id, $secret_key, $bucket_name, $region)
	{
		$this->id = $key_id;
		$this->secret_key = $secret_key;
		$this->bucket_name = $bucket_name;
		$this->region_name = $region;
	}

	public function uploadFile($file_name,$file_path)
	{
		$s3 = new Aws\S3\S3Client([
			'region'  => $this->region_name,
			'version' => 'latest',
			'credentials' => [
			    'key'    => $this->id,
			    'secret' => $this->secret_key,
			]
		]);

		$result = $s3->putObject([
			'Bucket' => $this->bucket_name,
			'Key'    => $file_name,
			'SourceFile' => $file_path			
		]);

		return $result;
	}

}

?>